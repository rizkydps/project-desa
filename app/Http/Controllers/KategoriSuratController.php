<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSurat;

class KategoriSuratController extends Controller
{
    public function index()
    {
        $kategori_surats = KategoriSurat::all();
        return view('dashboard.admin.kategori_surat.index', compact('kategori_surats'));
    }

    public function create()
    {
        return view('dashboard.admin.kategori_surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:kategori_surat,name'
        ]);

        KategoriSurat::create($request->all());

        return redirect()->route('kategori-surat.index')
            ->with('success', 'Kategori surat berhasil ditambahkan.');
    }

    public function edit(KategoriSurat $kategoriSurat)
    {
        return view('dashboard.admin.kategori_surat.edit', compact('kategoriSurat'));
    }

    public function update(Request $request, KategoriSurat $kategoriSurat)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:kategori_surat,name,' . $kategoriSurat->id
        ]);

        $kategoriSurat->update($request->all());

        return redirect()->route('kategori-surat.index')
            ->with('success', 'Kategori surat berhasil diperbarui.');
    }

    public function destroy(KategoriSurat $kategoriSurat)
    {
        $kategoriSurat->delete();

        return redirect()->route('kategori-surat.index')
            ->with('success', 'Kategori surat berhasil dihapus.');
    }
}
