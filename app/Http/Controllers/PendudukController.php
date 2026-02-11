<?php
namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();
        return view('admin.penduduk_adm', compact('data'));
    }

    public function create()
    {
        return view('admin.penduduk_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jorong'     => 'required|string|max:100',
            'laki_laki'  => 'required|integer|min:0',
            'perempuan'  => 'required|integer|min:0',
            'jumlah_kk'  => 'required|integer|min:0',
        ]);

        Penduduk::create([
            'jorong'     => $request->jorong,
            'laki_laki'  => $request->laki_laki,
            'perempuan'  => $request->perempuan,
            'jumlah_kk'  => $request->jumlah_kk,
        ]);

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Penduduk::findOrFail($id);
        return view('admin.penduduk_edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jorong'     => 'required|string|max:100',
            'laki_laki'  => 'required|integer|min:0',
            'perempuan'  => 'required|integer|min:0',
            'jumlah_kk'  => 'required|integer|min:0',
        ]);

        $item = Penduduk::findOrFail($id);
        $item->update([
            'jorong'     => $request->jorong,
            'laki_laki'  => $request->laki_laki,
            'perempuan'  => $request->perempuan,
            'jumlah_kk'  => $request->jumlah_kk,
        ]);

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Penduduk::findOrFail($id);
        $item->delete();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus.');
    }
}