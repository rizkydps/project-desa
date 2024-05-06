<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NomorSurat;


class NomorSuratController extends Controller
{
    public function index()
    {
        $no_surat = NomorSurat::select(['id','nomor_surat'])->get();
        return view('dashboard.admin.nomor_surat.index', compact('no_surat'));
    }
    public function edit($id)
    {
        $nomor_surat = NomorSurat::where('id', $id)->firstOrFail();
        return view('dashboard.admin.nomor_surat.edit', compact('nomor_surat'));
    }
    public function update(Request $request, $id)
    {
        $nomor_surat = NomorSurat::where('id', $id)->firstOrFail();
        $nomor_surat->nomor_surat = $request->nomor_surat;
        $nomor_surat->update();
        return redirect()->route('dashboard.admin.nomor_surat.index')->with('success','Berhasil Merubah Nomor Surat');
    }
}

