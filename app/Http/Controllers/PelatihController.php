<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dojo;
use App\Models\Absensi;
use App\Models\Materi;  
use App\Models\Murid;
use App\Models\Pelatih;
use App\Models\Sertifikat;
use App\models\Interaksi;
use App\models\Jadwal;

use Illuminate\Support\Facades\DB;

class PelatihController extends Controller
{
    
    public function dashboard()
    {

        $jadwals = jadwal::all();

        return view('pelatih.p_dashboard',['jadwals'=>$jadwals]);
    }
    public function showAbsensi(Request $request)
    {
        $dojos = dojo::get();
        $absensi = absensi::with('user')->get();
        $data = absensi::join('murid', 'absensi.users_id', '=', 'murid.users_id')
            ->join('dojo', 'murid.kode_dojo', '=', 'dojo.kode_dojo')
            ->select('absensi.kode_absensi', 'absensi.users_id', 'murid.nama_murid', 'murid.sabuk', 'absensi.status_kehadiran', 'murid.kode_dojo', 'dojo.nama_dojo', 'absensi.tanggal_absensi')
            ->get();
        if ($request->input('dojo')) {
            $data = absensi::join('murid', 'absensi.users_id', '=', 'murid.users_id')
                ->join('dojo', 'murid.kode_dojo', '=', '    dojo.kode_dojo')
                ->where('murid.kode_dojo', '=', $request->input('dojo'))
                ->select('absensi.kode_absensi', 'absensi.users_id', 'murid.nama_murid', 'murid.sabuk', 'absensi.status_kehadiran', 'murid.kode_dojo', 'dojo.nama_dojo', 'absensi.tanggal_absensi')
                ->get();
        }
        if ($request->input('tanggal')) {
            $data = absensi::join('murid', 'absensi.users_id', '=', 'murid.users_id')
                ->join('dojo', 'murid.kode_dojo', '=', 'dojo.kode_dojo')
                ->where('absensi.tanggal_absensi', '=', $request->input('tanggal'))
                ->select('absensi.kode_absensi', 'absensi.users_id', 'murid.nama_murid', 'murid.sabuk', 'absensi.status_kehadiran', 'murid.kode_dojo', 'dojo.nama_dojo', 'absensi.tanggal_absensi')
                ->get();
        }

        return view('pelatih.p_absensi', compact('dojos', 'absensi', 'data'));
    }

    public function tambahAbsensi()
    {
        $absensi = absensi::join('murid', 'absensi.users_id', '=', 'murid.users_id')
            ->join('dojo', 'murid.kode_dojo', '=', 'dojo.kode_dojo')
            ->where('absensi.status_kehadiran', '=', 'hadir')
            ->where('absensi.status_kehadiran', '=', 'tidak hadir')
            ->select('absensi.kode_absensi', 'absensi.users_id', 'murid.nama_murid', 'murid.sabuk', 'absensi.status_kehadiran', 'murid.kode_dojo', 'dojo.nama_dojo', 'absensi.tanggal_absensi')
            ->get();
        return view('pelatih.p_tambah_absensi', ['absensi' => $absensi]);
    }

    public function storeAbsensi(Request $request)
    {
        absensi::create([
            'users_id' => $request->users_id,
            'tanggal_absensi' => $request->tanggal,
            'status_kehadiran' => $request->status_kehadiran
        ]);
        return redirect()->route('showAbsensi')->with('success', 'Absensi dibuat');
    }
    
    // public function jadwal()
    // {
    //     return view('pelatih.p_jadwal');
    // }

    public function sertifikat()
    {
        $data = sertifikat::get();
        // dd($data);
        return view('pelatih.p_sertifikat', compact('data'));
    }

    public function detailSertifikat()
    {
        return view('pelatih.p_detail_sertifikat');
    }

    public function evaluasi()
    {
        // $interaksis = interaksi::where('users_id_1', Auth::id())
        //                         ->orWhere('users_id_2', Auth::id())
        //                         ->get();
        // return view('pelatih.p_evaluasi', compact('interaksis'));

        $user_id = 2; // ID pelatih yang sedang login, ganti dengan ID yang sesuai
        $interaksis = Interaksi::where('users_id_1', $user_id)
                                ->orWhere('users_id_2', $user_id)
                                ->get();
        return view('pelatih.p_evaluasi', compact('interaksis', 'user_id'));
    }

    
    public function store_evaluasi(Request $request)
    {

        $request->validate([
            'isi_pesan' => 'required|string|max:255',
            'users_id_1' => 'required|integer',
            'users_id_2' => 'required|integer',
        ]);

        Interaksi::create([
            'users_id_1' => $request->input('users_id_1'),
            'users_id_2' => $request->input('users_id_2'),
            'isi_pesan' => $request->input('isi_pesan'),
        ]);

        return redirect()->route('evaluasi')->with('success', 'Pesan berhasil dikirim');

    }

    public function dataMurid(Request $request)
    {
        $query = murid::with('dojo')->newQuery();

        // Filter by nama_murid
        if ($request->has('nama')) {
            $query->where('nama_murid', 'like', '%' . $request->get('nama') . '%');
        }

        $data = $query->get();
        $dojo = dojo::get();

        // Filter by dojo
        // dd($data['0']->dojo->kode_dojo);
        if ($request->has('dojo') && $request->get('dojo') !== 'all') {
            $namaDojo = $request->get('dojo');
            $data = $data->filter(function ($murid) use ($namaDojo) {
                return $murid->dojo->kode_dojo === $namaDojo;
            });
        }

        return view('pelatih.p_data_murid', compact('data', 'dojo'));
    }

    public function editMurid($id)
    {
        $data = murid::find($id);
        return view('pelatih.p_edit_murid', compact('data'));
    }
    public function updateMurid(Request $request, $id)
    {
        $murid = murid::findOrFail($id);
        $murid->update([
            'nama_murid' => $request->nama_murid,
            'nomor_telepon_rumah' => $request->nomor_telepon_rumah,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status' => $request->status
        ]);

        return redirect()->route('datamurid')->with('success', 'Murid berhasil diupdate.');
    }

    public function profilPelatih()
    {
        $data = pelatih::findOrFail(1);
        // dd($data);
        return view('pelatih.p_profil', compact('data'));
    }

    public function editProfil()
    {
        return view('pelatih.p_edit_profil');
    }

    public function updateProfil(Request $request, $id)
    {
        // Find the existing record
        $pelatih = Pelatih::findOrFail($id);

        // Update the record with the submitted data
        $pelatih->update([
            'nama_pelatih' => $request->input('nama_pelatih'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'pengcab' => $request->input('pengcab'),
            'dan' => $request->input('dan'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'alamat' => $request->input('alamat'),
            'status' => $request->input('status'),
        ]);

        // Redirect with a success message
        return redirect()->route('profilPelatih')->with('success', 'Profil berhasil diupdate.');
    }
    public function materi(Request $request)
    {
        $query = materi::with('subMateri')->newQuery();
        if ($request->has('materi')) {
            $query->where('jenis_materi', 'like', '%' . $request->get('materi') . '%');
        }
        $data = $query->get();

        return view('pelatih.p_materi', compact('data'));
    }
}
