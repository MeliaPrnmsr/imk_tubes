<?php

namespace App\Http\Controllers;
use App\Models\Dojo;
use App\Models\Event;
use App\Models\Informasi;
use App\Models\Murid;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Models\Pelatih;
use App\Models\SubMateri;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admindashboard()
    {

        $muridCount = Murid::count();
        $pelatihCount = Pelatih::count();
        $dojoCount = Dojo::count();
        $materiCount = Materi::count();

        // Ambil data event mendatang
        $upcomingEvents = informasi::where('tanggal_informasi', '>=', now())->get();

        // $pendaftaranEvents = Pendaftaran::where('tanggal_pendaftaran', '>=', now())->get();

        return view('admin.a_dashboard', compact('muridCount', 'pelatihCount', 'dojoCount', 'materiCount', 'upcomingEvents'));
    }

    // MURID
    // MURID
    public function datamurid(Request $request)
    {
        $query = Murid::query();
    
        if ($request->has('carimurid')) {
            $search = $request->input('carimurid');
            $query->where('nama_murid', 'like', "%{$search}%")
                  ->orWhere('sabuk', 'like', "%{$search}%")
                  ->orWhereHas('dojo', function($q) use ($search) {
                      $q->where('nama_dojo', 'like', "%{$search}%");
                  });
        }
    
        $query->orderBy('kode_dojo');
        $murid = $query->paginate(10); 
    
        return view('admin.a_datamurid', ['murid' => $murid]);
    }
    

    public function detailmurid($id)
    {

        $murid = Murid::findOrFail($id);

        return view('admin.a_detailmurid', ['murid' => $murid]);
    }

    public function tambahmurid()
    {
        $sabukOptions = ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam'];
        $dojo = Dojo::all();

        return view('admin.a_tambahmurid', ['dojo' => $dojo, 'sabuk' => $sabukOptions]);
    }

    public function addmurid(Request $request)
    {
        $validatedData = $request->validate([
            'nama_murid' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon_rumah' => 'required|string|max:255',
            'nama_orang_tua_wali' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
            'sabuk' => 'required|in:putih,kuning,hijau,biru,coklat,hitam',
            'status' => 'required|in:aktif,tidak aktif',
            'kode_dojo' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!DB::table('dojo')->where('kode_dojo', $value)->exists()) {
                        $fail('The selected dojo is invalid.');
                    }
                },
            ],
        ]);

        // Handle file upload
        $fileName = null;
        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('asset/img'), $fileName);
        }

        try {
            DB::beginTransaction();

            DB::statement('CALL TambahDataMurid(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                $validatedData['nama_murid'],
                $validatedData['email'],
                bcrypt($validatedData['password']),
                $validatedData['tempat_lahir'],
                $validatedData['tanggal_lahir'],
                $validatedData['nomor_telepon_rumah'],
                $validatedData['nama_orang_tua_wali'],
                $validatedData['pekerjaan_orang_tua'],
                $validatedData['pendidikan_terakhir'],
                $fileName ?? '', // Nama file atau string kosong jika tidak ada foto
                $validatedData['sabuk'],
                $validatedData['status'],
                $validatedData['kode_dojo']
            ]);

            DB::commit();
            return redirect()->route('admin.datamurid')->with('success', 'Murid berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.datamurid')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan murid: ' . $e->getMessage()]);
        }
        
    }

    public function store_murid(Request $request)
    {
        $validatedData = $request->validate([
            'nama_murid' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon_rumah' => 'required|string|max:255',
            'nama_orang_tua_wali' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'pendidikan_terakhir' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
            'sabuk' => 'required|in:putih,kuning,hijau,biru,coklat,hitam',
            'status' => 'required|in:aktif,tidak aktif',
            'kode_dojo' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!DB::table('dojo')->where('kode_dojo', $value)->exists()) {
                        $fail('The selected dojo is invalid.');
                    }
                },
            ],
            'sabuk_terakhir' => 'required|in:putih,kuning,hijau,biru,coklat,hitam',
            'dojo_terakhir' => 'required|string|max:255',
            'perguruan' => 'required|string|max:255'
        ]);

        // Handle file upload
        $fileName = null;
        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('asset/img'), $fileName);
        }

        try {
            DB::beginTransaction();

            DB::statement('CALL TambahMurid(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                $validatedData['nama_murid'],
                $validatedData['email'],
                bcrypt($validatedData['password']),
                $validatedData['tanggal_lahir'],
                $validatedData['nomor_telepon_rumah'],
                $validatedData['nama_orang_tua_wali'],
                $validatedData['pekerjaan_orang_tua'],
                $validatedData['pendidikan_terakhir'],
                $fileName ?? '', // Nama file atau string kosong jika tidak ada foto
                $validatedData['sabuk'],
                $validatedData['status'],
                $validatedData['kode_dojo'],
                $validatedData['sabuk_terakhir'],
                $validatedData['dojo_terakhir'],
                $validatedData['perguruan']
            ]);

            DB::commit();
            return redirect()->route('admin.datamurid')->with('success', 'Murid berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.datamurid')->withErrors(['error' => 'Terjadi kesalahan saat menambahkan murid: ' . $e->getMessage()]);
        }
    }
    public function editmurid($id)
    {

        $murid = Murid::findOrFail($id);
        $sabukOptions = ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam'];
        $dojo = Dojo::all();

        // dd($murid);

        return view('admin.a_editmurid', ['murid' => $murid, 'sabuk' => $sabukOptions, 'dojo' => $dojo]);
    }

    public function edit_murid(Request $request, $id)
    {
        $murid = Murid::findOrFail($id);

        $murid->update($request->all()); 
        return redirect()->route('admin.datamurid')->with('success', 'Data murid berhasil diperbarui!');
    }


    // PELATIH
    // PELATIH
    public function datapelatih(Request $request)
    {
        $query = Pelatih::query();
    
        if ($request->has('caripelatih')) {
            $search = $request->input('caripelatih');
            $query->where('nama_pelatih', 'like', "%{$search}%")
                  ->orWhere('pengcab', 'like', "%{$search}%")
                  ->orWhereHas('dojo', function($q) use ($search) {
                      $q->where('nama_dojo', 'like', "%{$search}%");
                  });
        }
    
        $query->orderBy('pengcab');
        $pelatih = $query->paginate(10); // Pagination with 10 items per page
    
        return view('admin.a_datapelatih', ['pelatih' => $pelatih]);
    }
    

    public function detailpelatih($id)
    {

        $pelatih = Pelatih::findOrFail($id);

        return view('admin.a_detailpelatih', ['pelatih' => $pelatih]);
    }

    public function tambahpelatih()
    {
        $dojo = Dojo::all();

        return view('admin.a_tambahpelatih', ['dojo' => $dojo]);
    }


    public function store_pelatih(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelatih' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'tgl_lahir' => 'required|date',
            'pengcab' => 'required|string|max:255',
            'dan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'foto' => 'nullable|image|max:1024',
            'dojo' => 'required|array',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        DB::beginTransaction();

        try {
            
            // Proses upload file foto
            if ($request->hasFile('foto')) {
                $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
                $request->file('foto')->move(public_path('asset/img'), $fileName);
            } else {
                $validatedData['foto'] = null;
            }

            // Simpan data pelatih ke tabel pelatih menggunakan prosedur tersimpan
            $result = DB::select('CALL TambahPelatih(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                $validatedData['nama_pelatih'],
                $validatedData['email'],
                bcrypt($validatedData['password']),
                $validatedData['tgl_lahir'],
                $validatedData['pengcab'],
                $validatedData['dan'],
                $validatedData['no_telp'],
                $validatedData['alamat'],
                $validatedData['foto'],
                $validatedData['status']
            ]);

            // Ambil kode_pelatih dari hasil prosedur tersimpan
            $pelatihId = $result[0]->kode_pelatih;

            // Simpan data dojo ke dalam tabel pelatih_dojo
            foreach ($validatedData['dojo'] as $dojo) {
                DB::table('pelatih_dojo')->insert([
                    'kode_pelatih' => $pelatihId,
                    'kode_dojo' => $dojo
                ]);
            }

            DB::commit();

            return redirect()->route('admin.datapelatih')->with('success', 'Pelatih berhasil didatakan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.datapelatih')->with('error', 'Gagal menambahkan pelatih.');
        }
    }



    // Controller
    public function editpelatih($id)
    {
        $pelatih = Pelatih::findOrFail($id);

        // Fetch the dojos related to the pelatih
        $associatedDojos = DB::table('pelatih_dojo')
            ->where('pelatih_dojo.kode_pelatih', $id)
            ->pluck('kode_dojo')
            ->toArray();

        // Fetch all dojos
        $dojos = DB::table('dojo')->select('kode_dojo', 'nama_dojo')->get();

        return view('admin.a_editpelatih', ['pelatih' => $pelatih, 'dojos' => $dojos, 'associatedDojos' => $associatedDojos]);
    }

    public function edit_pelatih(Request $request, $id)
    {
        $pelatih = Pelatih::findOrFail($id);

        $pelatih->update($request->all()); // Ensure fillable attributes in pelatih model

        // Update associated dojos
        DB::table('pelatih_dojo')->where('kode_pelatih', $id)->delete();

        if ($request->has('dojos')) {
            foreach ($request->dojos as $dojoId) {
                DB::table('pelatih_dojo')->insert([
                    'kode_pelatih' => $id,
                    'kode_dojo' => $dojoId
                ]);
            }
        }

        return redirect()->route('admin.datapelatih')->with('success', 'Data pelatih berhasil diperbarui!');
    }




    // DOJO
    // DOJO
    public function datadojo(Request $request)
    {
        $query = Dojo::query();
    
        if ($request->has('caridojo')) {
            $search = $request->input('caridojo');
            $query->where('nama_dojo', 'like', "%{$search}%")
                  ->orWhere('pengcab', 'like', "%{$search}%")
                  ->orWhere('alamat_dojo', 'like', "%{$search}%");
        }
    
        $dojo = $query->paginate(10); // Pagination with 10 items per page
    
        return view('admin.a_datadojo', ['dojo' => $dojo]);
    }
    

    public function detaildojo($id)
    {

        $dojo = Dojo::findOrFail($id);

        // dd($dojo);

        return view('admin.a_detaildojo', ['dojo' => $dojo]);
    }

    public function tambahdojo()
    {

        return view('admin.a_tambahdojo');
    }
    public function store_dojo(Request $request)
    {
        // dd($request);

        $dojo = Dojo::all();

        $dojo = Dojo::create($request->all()); //cara store massaginment jangan lupa setting fillable di controller nya

        return redirect()->route('admin.datadojo')->with('success', 'Data dojo berhasil ditambah!');
    }

    public function editdojo($id)
    {
        $dojo = Dojo::findOrFail($id);

        return view('admin.a_editdojo', ['dojo' => $dojo]);
    }
    public function edit_dojo(Request $request, $id)
    {

        // dd($request->all());

        $dojo = Dojo::findOrFail($id);

        $dojo->update($request->all());

        return redirect()->route('admin.datadojo')->with('success', 'Data dojo berhasil diperbarui!');
    }

    // JADWAL
    // JADWAL
    public function datajadwal(Request $request)
    {
        $dojo = Dojo::all();
        $filter = $request->input('dojo'); // Inisialisasi variabel $filter dengan nilai dari input 'dojo' pada request
        $timeFilter = $request->input('waktu'); // Inisialisasi variabel $timeFilter dengan nilai dari input 'waktu' pada request

        $query = Jadwal::query();

        // Filter berdasarkan dojo
        if ($request->has('dojo')) {
            $query->where('kode_dojo', $filter); // Gunakan $filter untuk filtering
        }

        $jadwal = $query->paginate(2);


        return view('admin.a_datajadwal', ['dojo' => $dojo, 'jadwal' => $jadwal, 'filter' => $filter]);
    }


    public function filterJadwal(Request $request)
    {
        $dojo = Dojo::all();
        $jadwal = Jadwal::query();
        $query = Jadwal::query();

        $filter = [
            'dojo' => $request->input('dojo'),
            'waktu' => $request->input('waktu'),
        ];

        if ($filter['dojo']) {
            $jadwal->where('kode_dojo', $filter['dojo']);
        }

        $jadwal = $query->paginate(10);

        return view('admin.a_datajadwal', ['dojo' => $dojo, 'jadwal' => $jadwal, 'filter' => $filter,]);
    }

    public function detailjadwal($id)
    {

        $jadwal = Jadwal::findOrFail($id);
        return view('admin.a_detailjadwal', ['jadwal' => $jadwal]);
    }

    public function tambahjadwal()
    {
        $dojo = Dojo::all();
        return view('admin.a_tambahjadwal', ['dojo' => $dojo]);
    }

    public function store_jadwal(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_dojo' => 'required|exists:dojo,kode_dojo',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'tempat' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('admin.datajadwal')->with('success', 'Jadwal berhasil ditambahkan!');
    }


    public function editjadwal($id)
    {

        $jadwal = Jadwal::findOrFail($id);
        $dojo = Dojo::all();

        return view('admin.a_editjadwal', ['jadwal' => $jadwal, 'dojo' => $dojo]);
    }
    public function edit_jadwal(Request $request, $id)
    {

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update($request->all());

        return redirect()->route('admin.datajadwal')->with('success', 'Data jadwal berhasil diperbarui!');
    }


    // PENDAFTARAN
    // PENDAFTARAN
    public function pendaftaran()
    {

        $pendaftaran = Pendaftaran::all();

        // dd($pendaftaran);

        return view('admin.a_pendaftaran',['pendaftaran'=>$pendaftaran]);
    }

    public function detailpendaftaran()
    {
        $sabukOptions = ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam'];
        $dojo = Dojo::all();

        return view('admin.a_detailpendaftaran', ['dojo' => $dojo, 'sabuk' => $sabukOptions]);
    }

    // INFORMASI
    // INFORMASI
    public function informasi()
    {

        $informasi = Event::all();

        return view('admin.a_informasi', ['informasi' => $informasi]);
    }

    public function detailinformasi($id)
    {

        $informasi = Event::findOrFail($id);

        return view('admin.a_detailinformasi', ['informasi' => $informasi]);
    }


    public function tambahinformasi()
    {
        return view('admin.a_tambahinformasi');
    }

    public function store_informasi(Request $request)
    {
        $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'deskripsi_informasi' => 'nullable|string',
            'dokumen' => 'nullable',
            'tanggal_informasi' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/file'), $filename);
            $data['dokumen'] = $filename;
        }

        event::create($data);

        return redirect()->back()->with('success', 'Informasi berhasil ditambahkan!');
    }

    public function editinformasi($id)
    {
        $informasi = Event::findOrFail($id);

        return view('admin.a_editinformasi', ['informasi' => $informasi]);
    }

    public function edit_informasi(Request $request, $id)
    {
        // dd($request->all());

        $informasi = Event::findOrFail($id);

        $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'deskripsi_informasi' => 'nullable|string',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx',
            'tanggal_informasi' => 'required|date',
        ]);

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $informasi->dokumen = $filename;
        }

        $informasi->update($request->except('dokumen')); // Update data kecuali dokumen

        return redirect()->back()->with('success', 'Informasi berhasil diperbarui!');
    }
    // MATERI
    // MATERI
    public function materi($belt)
    {
        $materi = Materi::where('belt', $belt)->get();
        return view('admin.a_materi', compact('materi', 'belt'));
    }

    public function datamateri()
    {
        $materis = Materi::all()->groupBy('jenis_materi')->map(function ($group) {
            return $group->groupBy('judul_sub_materi');
        });
        return view('admin.a_datamateri', compact('materis'));
    }

    public function detailmateri($id)
    {

        $materi = Materi::findOrFail($id);

        return view('admin.a_detailmateri', ['materi' => $materi]);
    }

    public function tambahmateri()
    {
        $sabukOptions = ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam'];
        return view('admin.a_tambahmateri', ['sabuk' => $sabukOptions]);
    }

    public function store_materi(Request $request)
    {
        $request->validate([
            'sabuk' => ['required'],
            'jenis_materi' => ['required'],
            'judul_materi' => ['required', 'string', 'max:255'],
            'judul_sub_materi' => ['required', 'string', 'max:255'],
            'deskripsi_materi' => ['required', 'string'], // Tambahkan validasi deskripsi_materi
            'sub_materi.*' => ['required', 'string'],
            'isi_materi.*' => ['required', 'string'],
            'foto.*' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif'], // Perbaiki nama field untuk foto
            'link_youtube.*' => ['nullable', 'string'],
        ]);

        DB::beginTransaction();

        try {
            $materi = Materi::create([
                'sabuk' => $request->sabuk,
                'jenis_materi' => $request->jenis_materi,
                'judul_materi' => $request->judul_materi,
                'judul_sub_materi' => $request->judul_sub_materi,
                'deskripsi_materi' => $request->deskripsi_materi, // Simpan nilai deskripsi_materi
            ]);

            for ($i = 0; $i < count($request->sub_materi); $i++) {
                $file = $request->file('foto')[$i] ?? null;
                $filePath = null;

                if ($file) {
                    // Simpan file di public/storage/file
                    $filePath = $file->store('file', 'public');
                }

                SubMateri::create([
                    'kode_materi' => $materi->kode_materi,
                    'sub_materi' => $request->sub_materi[$i],
                    'link_youtube' => $request->link_youtube[$i] ?? null,
                    'isi_materi' => $request->isi_materi[$i],
                    'foto' => $filePath,
                ]);
            }

            DB::commit();
            return redirect()->route('materi.tambah')->with('success', 'Materi berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('materi.tambah')->with('error', 'Gagal menambahkan materi');
        }
    }

    public function editmateri($id)
    {
        $materi = Materi::with('subMateri')->findOrFail($id);
        $sub_materi = $materi->subMateri;
    
        return view('admin.a_editmateri', compact('materi', 'sub_materi'));
    }
    
    public function edit_materi(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);
        $materi->judul_materi = $request->input('judul_materi');
        $materi->judul_sub_materi = $request->input('judul_sub_materi');
        $materi->deskripsi_materi = $request->input('deskripsi_materi');
        $materi->jenis_materi = $request->input('jenis_materi');
        $materi->sabuk = $request->input('sabuk');
        $materi->save();
    
        foreach ($request->input('sub_materi') as $sub_id => $sub_data) {
            $subMateri = SubMateri::findOrFail($sub_id);
            $subMateri->sub_materi = $sub_data['sub_materi'];
            $subMateri->link_youtube = $sub_data['link_youtube'];
            $subMateri->isi_materi = $sub_data['isi_materi'];
    
            if ($request->hasFile("sub_materi.{$sub_id}.foto")) {
                $file = $request->file("sub_materi.{$sub_id}.foto");
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('public/sub_materi', $filename);
                $subMateri->foto = str_replace('public/', '', $path);
            }
    
            $subMateri->save();
        }
    
        return redirect()->route('edit.materi', $materi->kode_materi)->with('success', 'Materi and Sub Materi updated successfully!');
    }
}
