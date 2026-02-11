<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function index()
    {
        $brt = Berita::orderBy('tanggal', 'desc')->get();
        $populer = Berita::orderBy('views', 'desc')->limit(3)->get();
        return view('berita', compact('brt', 'populer'));
    }
    public function show($id, $judul = null)
    {
        $brt = Berita::findOrFail($id);
        $brt->increment('views');
        return view('isiberita', compact('brt'));
    }

    public function indexx() {
        $brt = DB::table('berita')->get();
        return view("admin.berita_adm", ['brt' => $brt]);
    }
    //tambah berita
    public function tambah(){
        return view("admin/inputberita");
        }

    // input berita
    public function store(Request $request)
{
    $request->validate([
        'judul'   => 'required|max:255', // ⬅️ batas 255 karakter
        'isi'     => 'required',
        'gambar'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'tanggal' => 'required|date'
    ]);

    // Batas jumlah kata judul (max 100 kata)
    $jumlahKataJudul = str_word_count(strip_tags($request->judul));
    if ($jumlahKataJudul > 100) {
        return redirect()->back()
            ->withInput()
            ->withErrors(['judul' => 'Judul berita tidak boleh lebih dari 100 kata. Saat ini ada ' . $jumlahKataJudul . ' kata.']);
    }

    $path = $request->file('gambar')->store('asset', 'public');

    Berita::create([
        'judul'   => $request->judul,
        'isi'     => $request->isi,
        'gambar'  => $path,
        'tanggal' => $request->tanggal
    ]);

    return redirect('/admin/berita_adm')->with('success', 'Berita berhasil ditambahkan!');
}




    // edit berita
    // Tampilkan form edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.editberita', compact('berita'));
    }
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama
        if ($berita->gambar && \Storage::disk('public')->exists($berita->gambar)) {
            \Storage::disk('public')->delete($berita->gambar);
        }

        // Upload gambar baru
        $gambarBaru = $request->file('gambar')->store('asset', 'public');
        $berita->gambar = $gambarBaru;
    }
        // Update data lainnya
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;
        $berita->save();
    return redirect()->route('berita.admin')->with('success', 'Berita berhasil diupdate!');
}

//hapus
    public function delete($id){
            DB::table('berita')->where('id_berita',$id)->delete();
            return redirect('admin/berita_adm');
        }
}
