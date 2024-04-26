<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{

    public function show() {
        $pegawais = Pegawai::all();

        return view('landing.pegawai', compact('pegawais'));

    }

    public function index()
    {
        $pegawais = Pegawai::all();
        return view('dashboard.admin.pegawai.index', compact('pegawais'));
    }
    public function create()
    {
        return view('dashboard.admin.pegawai.create');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'jabatan' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Simpan foto baru jika ada
    if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        $ext = $request->foto->getClientOriginalExtension();
        $picture_name_foto = 'pegawai_'.$request->name.".$ext";
        $request->foto->move(public_path('storage/img/pegawai'), $picture_name_foto);
        $pegawai->foto = $picture_name_foto;
    }

    // Update data pegawai
    $pegawai->update([
        'name' => $request->name,
        'jabatan' => $request->jabatan,
    ]);

    return redirect()->route('dashboard.pegawai.index')
        ->with('success', 'Data Pegawai berhasil diperbarui.');
}




    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // validasi file gambar
        ]);
    
        
        $picture_name_foto = null;
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $ext = $request->foto->getClientOriginalExtension();
            $picture_name_foto = 'pegawai_'.$request->name.".$ext";
            $request->foto->move(public_path('storage/img/pegawai'), $picture_name_foto);
        } else {
            return redirect()->back()->withErrors(['foto' => 'File foto tidak valid.'])->withInput();
        }
    
        
        $pegawai = new Pegawai();
        $pegawai->name = $request->name;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->foto = $picture_name_foto;
        $pegawai->save(); 
    
        return redirect()->route('dashboard.pegawai.index')
            ->with('success', 'Data Pegawai berhasil ditambahkan.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('dashboard.pegawai.index')
            ->with('success', 'Data Pegawai berhasil dihapus.');
    }
    
    
}
