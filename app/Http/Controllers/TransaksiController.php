<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
   public function index()
    {
        $transaksi = Transaksi::all();
        //$barang = barang::all();
        return view('transaksi', ['transaksi' => $transaksi]);
    }
    public function tambah($id){
        $b=DB::table('barang')->where('kode',$id)->get();
        return view('tambahtransaksi',['brg'=>$b]);
    }
    public function input(request $request){
        DB::table('transaksi')->insert ([
            'kode'=>$request->kode,
            'jml_jual'=>$request->jumlah,
            'harga_jual'=>$request->harga
        ]);
        return redirect('transaksi');
    }
    //edit
    public function edit($id){
        $transaksi=DB::table('transaksi')->where('id_transaksi',$id)->get();
        return view('editransaksi',['transaksi'=>$transaksi]);
    }   
    public function revisi(request $request)
    {
        DB::table('transaksi')->where('id_transaksi',$request->id)->update([
            'jml_jual' => $request->jml_jual,
            'harga_jual' => $request->harga_jual,
        ]);
        return redirect('transaksi');
    }
    public function delete($id){
        DB::table('transaksi')->where('id_transaksi',$id)->delete();
        return redirect('transaksi');
    }

}
