<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Murid;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Models\interaksi;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MuridUpdateRequest;

class MuridController extends Controller
{
    public function dashboard_m()
    {
        $murids = Murid::all();
        $jadwals = jadwal::all();
        // dd($murids);
        return view('murid.m_dashboard', compact('murids', 'jadwals'));
    }

    public function materi($users_id, Request $request)
    {
        $keyword = $request->keyword;
        // Memuat murid dengan relasi user dan dojo
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();
        $materis = Materi::where('judul_sub_materi', 'LIKE', '%' . $keyword . '%')
            ->orWhere('judul_materi', 'LIKE', '%' . $keyword . '%')
            ->orderBy('kode_materi', 'desc')->get();
        return view('murid.m_materi', compact('murids', 'materis'));
    }

    public function materiBySabuk($users_id, $sabuk, Request $request)
    {
        $keyword = $request->keyword;
        // Memuat murid dengan relasi user dan dojo
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();
        // Memuat materi dengan relasi submateri
        $materis = Materi::query();
        if ($sabuk) {
            // Filter materi berdasarkan sabuk yang dipilih
            $materis->where('sabuk', $sabuk);
        }
        // Filter materi berdasarkan keyword
        if ($keyword) {
            $materis->where(function ($query) use ($keyword) {
                $query->where('judul_sub_materi', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('judul_materi', 'LIKE', '%' . $keyword . '%');
            });
        }
        $materis = $materis->orderBy('kode_materi', 'desc')->get();
        return view('murid.m_materi', compact('murids', 'materis'));
    }

    public function isimateri_m($users_id, $materi, $judul_sub_materi)
    {
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();
        // Mengambil Materi dengan relasi ke tabel/model submateri
        $materis = Materi::with('submateri')
            ->where('judul_sub_materi', $judul_sub_materi)
            ->where('jenis_materi', $materi)
            ->orderBy('kode_materi')
            ->get();
        return view('murid.m_isimateri', compact('murids', 'materis'));
    }

    public function jadwal($users_id)
    {
        Carbon::setLocale('id');
        // Memuat murid agar dapat memanggil id saja
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();

        // Memuat jadwal dengan relasi ke dojo 
        $jadwals = Jadwal::with('dojo')->orderBy('tanggal')->orderBy('jam_mulai')->get();
        return view('murid.m_jadwal', compact('murids', 'jadwals'));
    }


    public function jadwalByMonth($users_id, $monthName)
    {
        Carbon::setLocale('id');

        // Convert nama bulan menjadi angka bulan
        $monthNumber = Carbon::parse("1 $monthName")->month;
        // Memuat murid dengan memanggil kolom id saja
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();

        // Memuat jadwal yang sesuai dengan monthname yaitu bulan yang dipilih dioption
        $jadwals = Jadwal::with('dojo')
            ->whereMonth('tanggal', $monthNumber)
            ->whereYear('tanggal', Carbon::now()->year)
            ->orderBy('tanggal')
            ->orderBy('jam_mulai')
            ->get();


        return view('murid.m_jadwal', compact('murids', 'jadwals'));
    }


    public function forum_m($users_id)
    {
        // Memuat murid agar dapat memanggil id saja
        $murids = Murid::select('user_id')->where('user_id', $users_id)->firstOrFail();

        // ID murid yang diambil dari URL
        $interaksis = Interaksi::where('users_id_1', $users_id)
            ->orWhere('users_id_2', $users_id)
            ->get();
        return view('murid.m_forum', compact('murids', 'interaksis', 'users_id'));
    }

    public function store_forum_m(Request $request, $users_id)
    {
        $request->validate([
            'isi_pesan' => 'required|string|max:255',
        ]);

        // Pengirim adalah murid (user_id dari URL) dan penerima selalu guru (ID 2)
        Interaksi::create([
            'users_id_1' => $users_id,
            'users_id_2' => 3,  // Pelatih
            'isi_pesan' => $request->input('isi_pesan'),
        ]);

        return redirect()->route('forum', ['users_id' => $users_id])->with('success', 'Pesan berhasil dikirim');
    }



    public function profile_m($users_id)
    {
        $murids = Murid::with('dojo', 'user')->where('user_id', $users_id)->firstOrFail();
        return view('murid.m_profile', compact('murids'));
    }

    public function editprofile_m($users_id)
    {
        $murids = Murid::with('dojo', 'user')->where('user_id', $users_id)->firstOrFail();
        $dojos = dojo::where('kode_dojo', '!=', $murids->kode_dojo)->get(['kode_dojo', 'nama_dojo']);
        // Daftar sabuk yang tersedia
        $sabuk_options = [
            'putih',
            'kuning',
            'hijau',
            'biru',
            'coklat',
            'hitam'
        ];

        // Hapus sabuk milik murid dari daftar opsi sabuk
        $sabuk_options = array_filter($sabuk_options, function ($sabuk) use ($murids) {
            return $sabuk !== $murids->sabuk;
        });
        return view('murid.m_editprofile', compact('murids', 'dojos', 'sabuk_options'));
    }

    public function update($users_id, Request $request)
    {
        // Mengambil objek user terkait 
        $murids = Murid::with('user')->where('user_id', $users_id)->firstOrFail();

        $validated = $request->validate([
            'nama_murid' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'sabuk' => 'string|in:putih,kuning,hijau,biru,coklat,hitam',
            'kode_dojo' => 'required|string|in:' . implode(',', $murids->dojo->pluck('kode_dojo')->toArray()),
            'nomor_telepon_rumah' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $murids->user_id,
        ]);

        // Memperbarui email pengguna terlebih dahulu
        $murids->user->update(['email' => $request->input('email')]);
        // Menggunakan except() untuk mengabaikan kolom email dari array input
        $murids->update($request->except('email'));
        //session flash jika berhasil mengedit database
        session()->flash('status', 'success');
        session()->flash('message', 'Edit Profile Success!');

        return redirect()->route('profile', ['users_id' => $users_id]);;
    }
}
