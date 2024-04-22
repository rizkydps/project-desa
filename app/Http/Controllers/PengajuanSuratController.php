<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSurat;

class PengajuanSuratController extends Controller
{


    public function index() {
        $kategoriSurat = KategoriSurat::all();

        return view('landing.formulir', compact('kategoriSurat'));

    }
}
