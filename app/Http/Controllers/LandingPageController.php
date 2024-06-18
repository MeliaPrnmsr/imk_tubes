<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home() {
        
        return view('landingpage.home');
    }

    public function pendaftaran() {
        
        return view('landingpage.pendaftaran');
    }

    public function store(PendaftaranRequest $request)
    {
        $newName = '';

        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->nama_murid . '.' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto', $newName);
        }

        $data = $request->all();
        $data['foto'] = $newName;

        Pendaftaran::create($data);
        return redirect('home');
    }

    public function produk() {
        
        return view('landingpage.produk');
    }
}
