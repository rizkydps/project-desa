<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\KategoriSurat;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Surat;

class SuratController extends Controller
{
   public function index(Request $request)
   {
        
    $kategoris = KategoriSurat::select(['id','name'])->get();
    $permintaans = Surat::where('status', '1')->get();
    return view('dashboard.admin.surat.index', compact('kategoris', 'permintaans'));
    }
   

   public function data_table()
    {
        $query = Surat::with('kategori_surat')->orderBy('created_at','asc');
        return DataTables::of($query)
                ->addColumn('options', function ($row){
                    return '
                    <a href="' . route('dashboard.surat.show', $row->id) . '" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                    <a href="' . route('dashboard.surat.edit', $row->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                    <button data-id="' . $row['id'] . '" class="btn btn-sm btn-danger" id="btn-delete"><i class="fa fa-trash"></i></button>
                ';
                })
                ->rawColumns(['options'])
                ->addIndexColumn()
                ->make(true);

    }

    public function cetak_pdf($kategori_surat_id)
    {
     // Cari surat berdasarkan kategori_surat_id
    $surat = Surat::where('kategori_surat', $kategori_surat_id)->where('status', 1)->firstOrFail();
    
    // Ambil data kategori surat
    $kategori_surat = KategoriSurat::findOrFail($kategori_surat_id);
    
    // Tentukan nama file template berdasarkan jenis surat
    $viewName = 'dashboard.admin.cetak_surat.' . strtolower(str_replace(' ', '_', $kategori_surat->name));
    
    // Periksa apakah template ada
    if (!view()->exists($viewName)) {
        abort(404);
    }
    
    // Tampilkan template surat langsung di browser
    return view($viewName, compact('surat'));
    }
    



    

    
}