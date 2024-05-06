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
   

    public function data_table(Request $request)
    {
        $query = Surat::with('kategori')->where('status', 1)->orderBy('created_at', 'desc');
        
        if($request->kategori_surat){
            $query->where('kategori_surat', $request->kategori_surat);
        }

        return DataTables::of($query)
                ->addColumn('kategori_name', function ($row) {
                    return $row->kategori->name;
                })
                ->addColumn('options', function ($row) {
                    
                    $waLink = 'https://wa.me/62' . substr($row->whatsapp, 1);
                    $waButton = '<a href="' . $waLink . '" class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i></a>';
                    
                    return $waButton .'
                        <a target="_blank" href="' . route('dashboard.surat.cetak_pdf', $row->id) . '" class="btn btn-sm btn-warning"><i class="fa fa-print"></i></a>
                    ';
                })
                ->rawColumns(['options'])
                ->addIndexColumn()
                ->make(true);
    }
    

    public function cetak_pdf($id)
{
    $surat = Surat::findOrFail($id);
    
    $kategori_surat_id = $surat->kategori_surat;
    $kategori_surat = KategoriSurat::findOrFail($kategori_surat_id);
    
    $viewName = 'dashboard.admin.cetak_surat.' . strtolower(str_replace(' ', '_', $kategori_surat->name));
    if (!view()->exists($viewName)) {
        abort(404);
    }
    
    return view($viewName, compact('surat'));
}

    



    

    
}