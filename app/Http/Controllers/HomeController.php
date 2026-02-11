<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $brt = Berita::orderBy('tanggal', 'desc')->limit(3)->get();
        $glr = DB::table('galery')->orderBy('id_galery', 'desc')->limit(6)->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('home', compact('glr', 'brt', 'populer'));
    }
    public function show($id, $judul)
    {
        $brt = Berita::findOrFail($id);
        $brt->increment('views');
        return view('isiberita', compact('brt'));
    }
}
