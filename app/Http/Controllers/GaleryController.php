<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Galery; 
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function indexx(){
        $glr= DB ::table('galery')->get();   
        return view("galery",['glr' => $glr]);
    }



    public function index()
    {
        $data = Galery::all();
        return view('admin.galery_adm', compact('data'));
    }

    public function create()
    {
        return view('admin.galery_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $path = $request->file('gambar')->store('asset', 'public');

        Galery::create([
            'gambar' => $path,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('galery.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Galery::findOrFail($id);
        return view('admin.galery_edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Galery::findOrFail($id);
        $request->validate([
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'image|nullable',
        ]);
        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($item->gambar);
            $path = $request->file('gambar')->store('asset', 'public');
            $item->gambar = $path;
        }
        $item->deskripsi = $request->deskripsi;
        $item->tanggal = $request->tanggal;
        $item->save();
        return redirect()->route('galery.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $item = Galery::findOrFail($id);
        Storage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('galery.index')->with('success', 'Galeri berhasil dihapus!');
    }
}
