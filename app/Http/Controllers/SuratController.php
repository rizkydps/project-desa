<?php

namespace App\Http\Controllers;

use App\Models\KategoriSurat;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    

    
}