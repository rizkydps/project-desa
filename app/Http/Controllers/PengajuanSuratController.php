<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriSurat;
use App\Models\Surat;

class PengajuanSuratController extends Controller
{


    public function index() {
        $kategoriSurat = KategoriSurat::all();

        return view('landing.formulir', compact('kategoriSurat'));

    }

    public function store(Request $request) {
        $request->validate([
            'whatsapp' => 'required'
        ]);
        $picture_name_ktp = null;
        $picture_name_kk = null;
        $picture_name_akta = null;
        $picture_name_barang = null;
        $picture_name_bukti = null;
        $picture_name_pengantar = null;
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


        $surat = new Surat();
        $surat->whatsapp = $request->whatsapp;
        $surat->name = $request->name;
        $surat->nik = $request->nik;
        $surat->tempat_lahir = $request->tempat_lahir;
        $surat->pekerjaan = $request->pekerjaan;
        $surat->alamat = $request->alamat;
        $surat->jenis_kelamin = $request->jenis_kelamin;
        $surat->warganegara = $request->warganegara;
        $surat->status_pernikahan = $request->status_pernikahan;
        $surat->agama = $request->agama;
        $surat->no_kk = $request->no_kk;
        $surat->tujuan_surat = $request->tujuan_surat;
        $surat->alasan_pindah = $request->alasan_pindah;
        $surat->umur = $request->umur;
        $surat->pengikut_pindah = $request->pengikut_pindah;
        $surat->berat_badan = $request->berat_badan;
        $surat->panjang_badan = $request->panjang_badan;
        $surat->tanggal_lahir = $request->tanggal_lahir;
        $surat->tanggal_meninggal = $request->tanggal_meninggal;
        $surat->tanggal = $request->tanggal;
        $surat->tahun_mulai = $request->tahun_mulai;
        $surat->hari_lahir = $request->hari_lahir;
        $surat->jam_waktu = $request->jam_waktu;
        $surat->foto_ktp = $picture_name_ktp; // img
        $surat->foto_kk = $picture_name_kk; // img
        $surat->foto_akta = $picture_name_akta; // img
        $surat->foto_barang = $picture_name_barang; // img
        $surat->foto_bukti = $picture_name_bukti; // img
        $surat->foto_pengantar = $picture_name_pengantar; // img

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
