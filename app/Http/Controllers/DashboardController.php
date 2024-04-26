<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Surat;
use App\Models\Pegawai;

class DashboardController extends Controller
{
    public function index()
    {
        
        $pengaduans = Pengaduan::all();
        $total_surat = Surat::count();
        $total_pegawai = Pegawai::count();
        $total_aduan = Pengaduan::count();
        $total_surat_waiting = Surat::where('status', 0)->count();
        $total_surat_disetujui = Surat::where('status', 1)->count();
        $total_surat_ditolak = Surat::where('status', 3)->count();

        return view('dashboard.home', compact(
            'pengaduans',
            'total_surat',
            'total_pegawai',
            'total_aduan',
            'total_surat_waiting',
            'total_surat_disetujui',
            'total_surat_ditolak'
        ));
    }
}
