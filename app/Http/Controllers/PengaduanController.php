<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\StorePengaduanRequest;
use App\Http\Requests\UpdatePengaduanRequest;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function store(Request $request)
    {
        $formData = new Pengaduan();
        $formData->nama = $request->input('nama');
        $formData->whatsapp = $request->input('whatsapp');
        $formData->prihal = $request->input('prihal');
        $formData->aduan = $request->input('aduan');
        $formData->save();


        return back()->with('success', 'Form berhasil dikirim!');
    }

    // public function index()
    // {
    // $datas = Pengaduan::all();
    // //datas = Pengaduan::select(['id','nama','whatsapp','prihal','aduan'])->get();
    // return view('dashboard.home', compact('datas'));
    // }

}
