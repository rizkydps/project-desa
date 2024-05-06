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
            $table->string('name')->nullable();
            $table->string('name')->nullable();

            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('nomer_surat')->nullable();
            
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('warganegara')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('tujuan_surat')->nullable();
            $table->string('alasan_pindah')->nullable();
            

            $table->integer('umur')->nullable();
            $table->integer('pengikut_pindah')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('panjang_badan')->nullable();


            

            $table->date('tanggal_lahir')->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->date('tanggal')->nullable();
            $table->date('tahun_mulai')->nullable();
            $table->date('hari_lahir')->nullable();
            $table->date('jam_waktu')->nullable();

            
            $table->string('foto_ktp')->nullable();        
            $table->string('foto_kk')->nullable();
            $table->string('foto_akta')->nullable();
            $table->string('foto_barang')->nullable();
            $table->string('foto_bukti')->nullable();
            $table->string('foto_pengantar')->nullable();
            $table->string('status')->default('0');
            $table->string('slug')->nullable();
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
