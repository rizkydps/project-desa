<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\KategoriSurat;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;




class PermintaanSuratController extends Controller
{
        public function index() {
            $kategoris = KategoriSurat::select(['id','name'])->get();

            if(Auth::user()->role = 1){
                 $kategoris = KategoriSurat::select(['id','name'])->get();
            }elseif(Auth::user()->role = 2){
                $kategoris = KategoriSurat::where('id',[1,2,3,4,5])->get();

            }elseif(Auth::user()->role = 3){
                $kategoris = KategoriSurat::where('id',[7,8,11])->get();
            }
            elseif(Auth::user()->role = 4){
                $kategoris = KategoriSurat::where('id',[6,9,10])->get();
            } else {
                return " ";
            }

            return view('dashboard.admin.permintaan.index', compact('kategoris'));
        }

        

    public function show($id) {
        $surat = Surat::where('id',$id)->firstOrFail();


        // dd($surat->kategori_surat);

        if($surat->kategori_surat == 1)
        {
            return view('dashboard.admin.detail_surat.domisili', compact('surat'));
        }
        elseif($surat->kategori_surat == 2) {
            return view('dashboard.admin.detail_surat.keterangan-pindah', compact('surat'));
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
    
    


    public function data_table(Request $request)
    {
        $query = Surat::with('kategori')->whereIn('status', ['0', '3'])->orderBy('created_at', 'desc');
        $auth_role = Auth::user()->role;
        
        if ($auth_role == 1) {
            // No category filtering for role 1
        } elseif ($auth_role == 2) {
            $query->where('kategori_surat', '>', 5); // Filters categories 6 and higher
        } elseif ($auth_role == 3) {
            $query->whereIn('kategori_surat', [7, 8, 11]); // Filters categories 7, 8, and 11
        } elseif ($auth_role == 4) {
            $query->whereIn('kategori_surat', [6, 9, 10]); // Filters categories 6, 9, and 10
        } else {
            // Invalid role, return empty data
            return DataTables::of([])
                    ->addColumn('kategori_name', function ($row) {
                        return ''; // Empty category name
                    })
                    ->addColumn('options', function ($row) {
                        return ''; // Empty options
                    })
                    ->make(true);
        }
        
        // Execute the query
        $data = $query->get();
        
        return DataTables::of($data)
            ->addColumn('kategori_name', function ($row) {
                return $row->kategori->name;
            })
            ->addColumn('options', function ($row) {
                $waLink = 'https://wa.me/62' . substr($row->whatsapp, 1);
                $waButton = '<a href="' . $waLink . '" class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i></a>';
                
                return $waButton . ' <a class="btn btn-sm btn-outline-info" href="' . route('dashboard.permintaan.show', $row->id) . '"><i class="fas fa-eye"></i></a>';
            })
            ->rawColumns(['options'])
            ->addIndexColumn()
            ->make(true);
        
    }



    
}
