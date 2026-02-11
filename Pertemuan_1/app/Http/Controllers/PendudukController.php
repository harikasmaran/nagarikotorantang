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

    public function edit($id)
    {
        $item = Penduduk::findOrFail($id);
        return view('admin.penduduk_edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
        ]);

        $item = Penduduk::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }
}
