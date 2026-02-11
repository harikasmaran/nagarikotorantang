<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Berita;

class ProfilController extends Controller
{ 
    public function index()
    {
        $vm = DB::table('visimisi')->get();
        $pdk = DB::table('penduduk')->get();
        $brt = Berita::orderBy('tanggal', 'desc')->limit(3)->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('visimisi', compact('vm', 'pdk', 'brt', 'populer'));
    }
    public function show($id)
    {
        $brt = Berita::findOrFail($id);
        $brt->increment('views');
        return view('isiberita', compact('brt'));
    }

    public function index2()
    {
        $pdk = DB::table('penduduk')->get();
        $brt = Berita::orderBy('tanggal', 'desc')->limit(3)->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('listing', compact('pdk', 'brt', 'populer'));
    }

    public function index3()
    {
        $st = DB::table('struktur')->get();
        $pdk = DB::table('penduduk')->get();
        $brt = Berita::orderBy('tanggal', 'desc')->limit(3)->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('struktur', compact('st', 'pdk', 'brt', 'populer'));
    }

    public function index4()
    {
        $pdk = DB::table('penduduk')->get();
        $brt = Berita::orderBy('tanggal', 'desc')->limit(3)->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('alurpelayanan', compact('pdk', 'brt', 'populer'));
    }
    
}
