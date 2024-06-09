<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp');
            $table->string('name_pemohon');
            // --------
            $table->string('nomor_surat')->nullable();
            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('warganegara')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('alamat')->nullable();
            
            $table->date('tanggal_lahir')->nullable();
            // pindah
            $table->string('alamat_tujuan')->nullable();
            $table->string('alasan_pindah')->nullable();

            $table->integer('pengikut_pindah')->nullable();
            // nikah
            $table->string('name_istri')->nullable();
            $table->string('nik_istri')->nullable();
            $table->string('tempat_lahir_istri')->nullable();
            $table->string('pekerjaan_istri')->nullable();
            $table->string('agama_istri')->nullable();
            $table->string('foto_ktp_istri')->nullable();  

            $table->date('tanggal_lahir_istri')->nullable();
            //kematian
            $table->integer('umur')->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->string('alamat_makam')->nullable();
            // kelahiran
            $table->string('name_anak')->nullable();
            $table->string('no_kk')->nullable();
                // name
                // name_istri
            $table->integer('berat_badan')->nullable();
            $table->integer('panjang_badan')->nullable();
            $table->string('hari_lahir')->nullable();
            // ijin keramaian
            $table->string('name_kegiatan')->nullable();
            $table->date('tanggal_kegiatan')->nullable();
            $table->string('alamat_kegiatan')->nullable();
            //usaha
            $table->integer('tahun_mulai')->nullable();
            $table->string('name_usaha')->nullable();
            $table->string('tujuan_usaha')->nullable();
            // kehilangan
            $table->string('name_barang')->nullable();
            $table->string('foto_barang')->nullable();
            $table->string('foto_bukti')->nullable();
            // orang yg sama
            $table->string('foto_akta')->nullable();
            $table->string('name2')->nullable();
            $table->string('nik2')->nullable();
            $table->string('tempat_lahir2')->nullable();
            $table->string('pekerjaan2')->nullable();
            $table->string('jenis_kelamin2')->nullable();
            $table->date('tanggal_lahir2')->nullable();
            $table->string('alamat2')->nullable();
            // rekom
            $table->string('tujuan_surat')->nullable();

            // other
            $table->date('tanggal')->nullable();
    

            $table->string('foto_ktp')->nullable();        
            $table->string('foto_kk')->nullable();
            $table->string('foto_pengantar')->nullable();
            $table->string('status')->default('0');
            $table->foreignId('kategori_surat')->references('id')->on('kategori_surat')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
        
    }
};
