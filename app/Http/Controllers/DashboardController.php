<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
class DashboardController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('dashboard.home', compact('pengaduans'));
    }
}
