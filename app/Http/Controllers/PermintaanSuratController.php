<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class PermintaanSuratController extends Controller
{
        public function index() {
            $permintaans = Surat::whereIn('status', ['0', '3'])->get();
            return view('dashboard.admin.permintaan.index', compact('permintaans'));
        }

        

    public function show($id) {
        $surat = Surat::where('id',$id)->firstOrFail();


        // dd($surat->kategori_surat);

        if($surat->kategori_surat == 1)
        {
            return view('dashboard.admin.detail_surat.domisili', compact('surat'));
        }
        elseif($surat->kategori_surat == 2) {
            return view('dashboard.admin.detail_surat.pindah', compact('surat'));
        }
        elseif($surat->kategori_surat == 3) {
            return view('dashboard.admin.detail_surat.pengantar-nikah', compact('surat'));
        }
        elseif($surat->kategori_surat == 4) {
            return view('dashboard.admin.detail_surat.kematian', compact('surat'));
        }
        elseif($surat->kategori_surat == 5) {
            return view('dashboard.admin.detail_surat.kelahiran', compact('surat'));
        }
        elseif($surat->kategori_surat == 6) {
            return view('dashboard.admin.detail_surat.ijin-keramaian', compact('surat'));
        }
        elseif($surat->kategori_surat == 7) {
            return view('dashboard.admin.detail_surat.sktm', compact('surat'));
        }
        elseif($surat->kategori_surat == 8) {
            return view('dashboard.admin.detail_surat.usaha', compact('surat'));
        }
        elseif($surat->kategori_surat == 9) {
            return view('dashboard.admin.detail_surat.kehilangan', compact('surat'));
        }
        elseif($surat->kategori_surat == 10) {
            return view('dashboard.admin.detail_surat.orangyangsama', compact('surat'));
        }
        elseif($surat->kategori_surat ==11) {
            return view('dashboard.admin.detail_surat.rekomendasi', compact('surat'));
        }
        // return view('dashboard.admin.permintaan.show', compact('surat'));
    }
    public function update(Request $request, $id) {
        
        $surat = Surat::findOrFail($id);
    
       
        $surat->status = $request->input('status');
    
        
        $surat->update();
    
        
        return redirect()->route('dashboard.permintaan.index')->with('success', 'Status surat berhasil diperbarui');
    }
    

    
}
