<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class KategoriSuratSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forms = [
            ['name' => 'Surat Keterangan Domisili'],
            ['name' => 'Surat keterangn pindah'],
            ['name' => 'Surat pengantar Nikah'],
            ['name' => 'Surat Keterangan Kematian'],
            ['name' => 'Surat Keterangan Kelahiran'],
            ['name' => 'Surat Ijin Keramaian'],
            ['name' => 'Surat Keterangan Tidak Mampu'],
            ['name' => 'Surat Keterangan Usaha'],
            ['name' => 'Surat Kehilangan'],
            ['name' => 'Surat Keterangan Orang Yang Sama'],
            ['name' => 'Surat Rekomendasi'],
        ];

        // Insert data into the database
        DB::table('kategori_surat')->insert($forms);
    }
}