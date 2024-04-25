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
        'name',
        'nik',
        'tempat_lahir',
        'pekerjaan',
        'alamat',
        'jenis_kelamin',
        'warganegara',
        'status_pernikahan',
        'agama',
        'no_kk',
        'tujuan_surat',
        'alasan_pindah',
        'umur',
        'pengikut_pindah',
        'berat_badan',
        'panjang_badan',
        'tanggal_lahir',
        'tanggal_meninggal',
        'tanggal',
        'tahun_mulai',
        'hari_lahir',
        'jam_waktu',
        'foto_ktp',
        'foto_kk',
        'foto_akta',
        'foto_barang',
        'foto_bukti',
        'foto_pengantar',
        'status',
    ];

    
    public function kategori_surat()
    {
        return $this->belongsTo(KategoriSurat::class, 'kategori_surat', 'id');
        
    }
    
}
