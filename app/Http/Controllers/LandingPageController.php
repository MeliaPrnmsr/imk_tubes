<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home() {
        
        return view('landingpage.home');
    }

    public function pendaftaran() {
        
        return view('landingpage.pendaftaran');
    }

    public function produk() {
        
        return view('landingpage.produk');
    }
}
