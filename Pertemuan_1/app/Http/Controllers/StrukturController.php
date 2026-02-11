<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur; 
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
     public function indexx()
    {
        $data = struktur::all();
        return view('admin.struktur', compact('data'));
    }

    public function index()
    {
        $data = struktur::all();
        return view('admin.struktur_adm', compact('data'));
    }

    public function edit($id)
    {
        $item = struktur::findOrFail($id);
        return view('admin.struktur_edit', compact('item'));
    }

    public function update(Request $request, $id)
{
    $item = struktur::findOrFail($id);

    $request->validate([
        'tanggal' => 'required|date',
        'gambar' => 'image|nullable',
    ]);

    // kalau ada file gambar baru
    if ($request->hasFile('gambar')) {
        // hapus gambar lama
        if ($item->gambar && Storage::disk('public')->exists($item->gambar)) {
            Storage::disk('public')->delete($item->gambar);
        }

        // simpan gambar baru
        $path = $request->file('gambar')->store('asset', 'public');
        $item->gambar = $path;
    }

    // update tanggal
    $item->tanggal = $request->tanggal;

    $item->save();

    return redirect()->route('struktur.index')
                    ->with('success', 'Struktur berhasil diperbarui!');
}

}
