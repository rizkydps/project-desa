<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class PermintaanSuratController extends Controller
{
    public function index() {
        $permintaans = Surat::where('status','0')->get();

        return view('dashboard.admin.permintaan.index', compact('permintaans'));
    }

    
}
