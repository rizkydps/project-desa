<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('dashboard.admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('dashboard.admin.berita.create');
    }

    // public function store()
    // {
    //     $berita = 
    // }

}
