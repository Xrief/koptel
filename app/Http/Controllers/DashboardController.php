<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Layanan;
class DashboardController extends Controller
{
    public function indexBerita(){
        $indexBerita = Berita::all();

        return view('dashboard.berita',[
            'indexBerita'=> $indexBerita,
        ]);
    }
    public function indexLayanan(){
        $indexLayanan = Layanan::all();

        return view('dashboard.layanan',[
            'indexLayanan'=> $indexLayanan,
        ]);
    }
}
