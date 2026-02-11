<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pdk= DB ::table('penduduk')->get(); 
        $brt = DB::table('berita')->count();
        $glr = DB::table('galery')->count();
        return view("/admin/dashboard",[
                                        'pdk' => $pdk,
                                        'brt' => $brt,
                                        'glr' => $glr]);
    }
}
