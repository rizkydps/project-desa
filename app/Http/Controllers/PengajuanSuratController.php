<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSurat;
use App\Models\Surat;
use Validator;

class PengajuanSuratController extends Controller
{


    public function index() {
        $kategoriSurat = KategoriSurat::all();

        return view('landing.formulir2', compact('kategoriSurat'));

    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            // other validation rules
            'captcha' => 'required|captcha',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $request->validate([
            'whatsapp' => 'required',
            'name_pemohon' => 'required'

        ]);
        
        $picture_name_ktp = null;
        $picture_name_kk = null;
        $picture_name_akta = null;
        $picture_name_barang = null;
        $picture_name_bukti = null;
        $picture_name_pengantar = null;
        $picture_name_istri_ktp = null;
        if($request->foto_ktp) {

            $ext = $request->foto_ktp->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/ktp/');
            $picture_name_ktp = 'ktp_'.$request->name.".$ext";
            $request->foto_ktp->move($upload_path, $picture_name_ktp);
        }
        if($request->foto_kk) {

            $ext = $request->foto_kk->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/kk/');
            $picture_name_kk = 'kk_'.$request->name.".$ext";

            $request->foto_kk->move($upload_path, $picture_name_kk);
        }
        if($request->foto_akta) {

            $ext = $request->foto_akta->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/akta/');
            $picture_name_akta = 'akta_'.$request->name.".$ext";

            $request->foto_akta->move($upload_path, $picture_name_akta);
        }
        if($request->foto_barang) {

            $ext = $request->foto_barang->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/barang/');
            $picture_name_barang = 'barang_'.$request->name.".$ext";

            $request->foto_barang->move($upload_path, $picture_name_barang);
        }
        if($request->foto_bukti) {

            $ext = $request->foto_bukti->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/bukti/');
            $picture_name_bukti = 'bukti_'.$request->name.".$ext";

            $request->foto_bukti->move($upload_path, $picture_name_bukti);
        }
        if($request->foto_pengantar) {

            $ext = $request->foto_pengantar->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/pengantar/');
            $picture_name_pengantar = 'pengantar_'.$request->name.".$ext";

            $request->foto_pengantar->move($upload_path, $picture_name_pengantar);
        }
        if($request->foto_ktp_istri) {
            $ext = $request->foto_ktp_istri->getClientOriginalExtension();

            $upload_path = public_path('storage/img/surat/ktp/');
            $picture_name_istri_ktp = 'ktp_istri_'.$request->name.".$ext";
            $request->foto_ktp_istri->move($upload_path, $picture_name_istri_ktp);
        }


        $surat = new Surat();
        //$surat->nomer_surat = $request->nomer_surat;

        $surat->whatsapp = $request->whatsapp;
        $surat->name_pemohon = $request->name_pemohon;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->name = $request->name;
        $surat->nik = $request->nik;
        $surat->tempat_lahir = $request->tempat_lahir;
        $surat->pekerjaan = $request->pekerjaan;
        $surat->jenis_kelamin = $request->jenis_kelamin;
        $surat->warganegara = $request->warganegara;
        $surat->status_pernikahan = $request->status_pernikahan;
        $surat->alamat = $request->alamat;
        $surat->no_kk = $request->no_kk;
        $surat->tanggal_lahir = $request->tanggal_lahir;
        $surat->alamat_tujuan = $request->alamat_tujuan;
        $surat->alasan_pindah = $request->alasan_pindah;
        $surat->pengikut_pindah = $request->pengikut_pindah;
        $surat->name_istri = $request->name_istri;
        $surat->nik_istri = $request->nik_istri;
        $surat->tempat_lahir_istri = $request->tempat_lahir_istri;
        $surat->pekerjaan_istri = $request->pekerjaan_istri;
        $surat->agama_istri = $request->agama_istri;
        $surat->tanggal_lahir_istri = $request->tanggal_lahir_istri;
        $surat->umur = $request->umur;
        $surat->tanggal_meninggal = $request->tanggal_meninggal;
        $surat->alamat_makam = $request->alamat_makam;
        $surat->name_anak = $request->name_anak;
        $surat->berat_badan = $request->berat_badan;
        $surat->panjang_badan = $request->panjang_badan;
        $surat->hari_lahir = $request->hari_lahir;
        $surat->name_kegiatan = $request->name_kegiatan;
        $surat->tanggal_kegiatan = $request->tanggal_kegiatan;
        $surat->alamat_kegiatan = $request->alamat_kegiatan;
        $surat->tahun_mulai = $request->tahun_mulai;
        $surat->name_usaha = $request->name_usaha;
        $surat->tujuan_usaha = $request->tujuan_usaha;
        $surat->name_barang = $request->name_barang;
        $surat->name2 = $request->name2;
        $surat->nik2 = $request->nik2;
        $surat->tempat_lahir2 = $request->tempat_lahir2;
        $surat->pekerjaan2 = $request->pekerjaan2;
        $surat->jenis_kelamin2 = $request->jenis_kelamin2;
        $surat->tanggal_lahir2 = $request->tanggal_lahir2;
        $surat->alamat2 = $request->alamat2;
        $surat->tujuan_surat = $request->tujuan_surat;
        $surat->tanggal = $request->tanggal;

        $surat->foto_ktp = $picture_name_ktp; // img
        $surat->foto_kk = $picture_name_kk; // img
        $surat->foto_akta = $picture_name_akta; // img
        $surat->foto_barang = $picture_name_barang; // img
        $surat->foto_bukti = $picture_name_bukti; // img
        $surat->foto_pengantar = $picture_name_pengantar; // img
        $surat->foto_ktp_istri = $picture_name_istri_ktp;


        $kategori_surat = $request->kategori_surat;
        $parts = explode('form-', $kategori_surat);
        $last_part = end($parts);

        $surat->kategori_surat = intval($last_part);
        

        $surat->save();
        return redirect()->route('success.store');

    }



    public function success()
    {
        return view('landing.formulir-sukses');
    }
}
