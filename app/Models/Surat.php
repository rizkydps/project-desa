<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surats';

    protected $fillable = [
        'whatsapp',
        'name_pemohon',
        'nomor_surat',
        'name',
        'nik',
        'tempat_lahir',
        'pekerjaan',
        'jenis_kelamin',
        'warganegara',
        'status_pernikahan',
        'alamat',
        'no_kk',
        'tanggal_lahir',
        'alamat_tujuan',
        'alasan_pindah',
        'pengikut_pindah',
        'name_istri',
        'nik_istri',
        'tempat_lahir_istri',
        'pekerjaan_istri',
        'agama_istri',
        'foto_ktp_istri',
        'tanggal_lahir_istri',
        'umur',
        'tanggal_meninggal',
        'alamat_makam',
        'name_anak',
        'berat_badan',
        'panjang_badan',
        'hari_lahir',
        'name_kegiatan',
        'tanggal_kegiatan',
        'alamat_kegiatan',
        'tahun_mulai',
        'name_usaha',
        'tujuan_usaha',
        'name_barang',
        'foto_barang',
        'foto_bukti',
        'foto_akta',
        'name2',
        'nik2',
        'tempat_lahir2',
        'pekerjaan2',
        'jenis_kelamin2',
        'tanggal_lahir2',
        'alamat2',
        'tujuan_surat',
        'tanggal',
        'foto_ktp',
        'foto_kk',
        'foto_pengantar',
        'status'
    ];

    
    public function kategori()
    {
        return $this->belongsTo(KategoriSurat::class, 'kategori_surat');
        
    }
    
}
