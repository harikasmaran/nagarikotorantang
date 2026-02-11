<?php
namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $data = Visimisi::all();
        return view('admin.visimisi_adm', compact('data'));
    }

    public function edit($id)
    {
        $item = Visimisi::findOrFail($id);
        return view('admin.visimisi_edit', compact('item'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'visi' => 'required|string|max:255',
        'misi' => 'required|string',
        'tanggal' => 'required|date',
    ]);

    $item = Visimisi::findOrFail($id);
    $item->update([
        'visi' => $request->visi,
        'misi' => $request->misi,
        'tanggal' => $request->tanggal,
    ]);

    return redirect()->route('visimisi.index')->with('success', 'Data visi dan misi berhasil diperbarui.');
}
}
