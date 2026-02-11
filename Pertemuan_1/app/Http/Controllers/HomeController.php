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
    public function show($id)
    {
        $brt = Berita::findOrFail($id);
        $brt->increment('views');
        return view('isiberita', compact('brt'));
    }

    // public function tambah(){
    //     return view("inputbarang");
    // }
    // public function input(Request $request)
    // {
    //     DB::table('barang')->insert([
    //         'kode' => $request->kode,
    //         'nama' => $request->nama,
    //         'jumlah' => $request->jumlah,
    //         'harga' => $request->harga
    //     ]);
    //     return redirect('barang');
    // }

    // //edit
    
    // public function edit($id){
    //     $brg=DB::table('barang')->where('kode',$id)->get();
    //     return view('editbarang',['brg'=>$brg]);
    // }   
    //  public function update(request $request)
    // {
    //     DB::table('barang')->where('kode',$request->id)->update([
    //         'nama' => $request->nama,
    //         'jumlah' => $request->jumlah,
    //         'harga' => $request->harga
    //     ]);
    //     return redirect('barang');
    // }
    // //delete
    // public function delete($id){
    //     DB::table('barang')->where('kode',$id)->delete();
    //     return redirect('barang');
    // }
}
