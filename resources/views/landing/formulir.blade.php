<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.landing-partial.style')
    <style>
        .form-container {
            display: none;
        }
    </style>
</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper pbmit-bg-color-light">

        <!-- Header Main Area -->
        <header class="site-header header-style-2">
            @include('layouts.landing-partial.navbar')



        </header>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">


            <section class="section-xl">
                <div class="container">
                    <div class="pbmit-heading-subheading text-center">

                        <h2 class="pbmit-title"> Formulir Pengajuan Surat Desa </h2>

                    </div>

                    @include('layouts.flashmessage')
                    <div class="appointment_box">


                        <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <select class="form-select form-control" name="kategori_surat"
                                        aria-label="Default select example" id="form-selector" onchange="showForm()">
                                        <option disabled selected>Pilih Jenis Surat :</option>
                                        {{--    --}}
                                        @foreach($kategoriSurat as $surat)
                                        <option value="form-{{ $surat->id}}">{{ $surat->name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            {{--  <h4 class="text-center mb-3">name surat</h4>  --}}

                            {{--  Surat Keterangan Domisili  --}}

                            <div class="form-container" id="form-1">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="status_pernikahan"
                                            aria-label="Default select example">
                                            <option disabled selected>Status Pernikahan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KK :</label>
                                        <input class="" type="file" id="formFile" name="foto_kk">
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="captcha"><code>Validasi :</code></label>
                                            <div>
                                                <img src="{{ captcha_src('math') }}" alt="captcha" class="captcha-img" id="captcha-img">
                                                <button type="button" class="btn btn-refresh" id="refresh-captcha">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>                                                
                                            </div>
                                            <input type="text" id="captcha" placeholder="Isi Validasi dengan Benar" class="form-control" name="captcha" required>
                                        </div>
                            
                                        @if ($errors->has('captcha'))
                                            <span class="text-danger">{{ $errors->first('captcha') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>

                            </div>

                            {{--  Surat keterangn pindah --}}
                            <div class="form-container" id="form-2">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nomer Kartu Keluarga"
                                            name="nno_kk">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="status_pernikahan"
                                            aria-label="Default select example">
                                            <option disabled selected>Status Pernikahan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Asal" name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Tujuan Pindah"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alasan Pindah"
                                            name="tujuan_surat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control"
                                            placeholder="Jumlah - Pengikut / keluarga yang pindah"
                                            name="pengikut_pindah">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KK :</label>
                                        <input class="" type="file" id="formFile" name="foto_kk">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat pengantar Nikah  --}}
                            <div class="form-container" id="form-3">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Suami" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK Suami" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp Pemohon"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir Suami"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>

                                    {{--  Istri  --}}

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Istri" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK Istri" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir Istri"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan Istri"
                                            name="pekerjaan">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Istri"
                                            name="alamat">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP Suami :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP Istri :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>


                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            {{--  Surat Keterangan Kematian  --}}
                            <div class="form-container" id="form-4">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Jenis Kelamin :</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Umur" name="umur">
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Meninggal"
                                            name="tanggal">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Meninggal"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Makam"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP Almarhum :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar/Keterangan dari
                                            Rt/Rw :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Keterangan  Kelahiran  --}}
                            <div class="form-container" id="form-5">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Hari Lahir"
                                            name="hari_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Jam Lahir"
                                            name="jam_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Berat Badan"
                                            name="berat_badan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="Panjang Badan"
                                            name="panjang_badan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Ayah" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Ibu" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp Pemohon"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Surat Keterangan dari
                                            Bidan/Rumah Sakit :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Ijin Keramaian  --}}
                            <div class="form-container" id="form-6">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Pemohon" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK Pemohon" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
                                            <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
                                            </div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="status_pernikahan"
                                            aria-label="Default select example">
                                            <option disabled selected>Status Pernikahan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Pemohon"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="name Kegiatan"
                                            name="tujuan_surat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Kegiatan"
                                            name="tanggal">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Tempat Kegiatan"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP Pemohon :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Keterangan Tidak Mampu  --}}
                            <div class="form-container" id="form-7">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
                                            <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
                                        </div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="status_pernikahan"
                                            aria-label="Default select example">
                                            <option disabled selected>Status Pernikahan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tujuan Surat"
                                            name="tujuan_surat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_pengantar">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KK :</label>
                                        <input class="" type="file" id="formFile" name="foto_kk">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Keterangan Usaha  --}}
                            <div class="form-container" id="form-8">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="status_pernikahan"
                                            aria-label="Default select example">
                                            <option disabled selected>Status Pernikahan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Usaha" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tahun Mulai"
                                            name="tahun_mulai">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tujuan Usaha"
                                            name="tujuan_surat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="form-control" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw
                                            :</label>
                                        <input class="form-control" type="file" id="formFile" name="foto_pengantar">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KK :</label>
                                        <input class="form-control" type="file" id="formFile" name="foto_kk">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Kehilangan  --}}
                            <div class="form-container" id="form-9">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Barang Hilang" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Barang :</label>
                                        <input class="" type="file" id="formFile" name="foto_barang">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Foto bpkb/stnk (jika kendaraan)
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_bukti">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Buku Tabungan (jika kartu
                                            atm)
                                            :</label>
                                        <input class="" type="file" id="formFile" name="foto_bukti">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Keterangan Orang Yang Sama  --}}
                            <div class="form-container" id="form-10">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
                                        <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
                                    </div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
                                        <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
                                    </div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto Akta Kelahiran :</label>
                                        <input class="" type="file" id="formFile" name="foto_akta">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KK :</label>
                                        <input class="" type="file" id="formFile" name="foto_kk">
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--  Surat Rekomendasi  --}}
                            <div class="form-container" id="form-11">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="No Whatsapp"
                                            name="whatsapp">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            name="tempat_lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date"
                                            class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                            aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir"
                                            name="tanggal_lahir">
                                    </div>
                                    {{--  <div class="col-md-6">
                                        <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
                                    </div>  --}}
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="warganegara"
                                            aria-label="Default select example">
                                            <option disabled selected>Warganegara</option>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control" name="agama"
                                            aria-label="Default select example">
                                            <option disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                            name="pekerjaan">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang"
                                            name="alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Tujuan Surat"
                                            name="tujuan_surat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Upload Foto KTP :</label>
                                        <input class="" type="file" id="formFile" name="foto_ktp">
                                    </div>


                                    <div class="col-md-12 mt-4">
                                        <button class="pbmit-btn" type="submit">
                                            <span class="pbmit-button-text" name="submit">Kirim</span>
                                            <span class="pbmit-button-icon-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>


        </div>


    </div>
    </section>



    </div>
    <!-- page content End -->

    <!-- footer -->
    @include('layouts.landing-partial.footer')

    <!-- footer End -->

    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <div class="pbmit-search-overlay">
        <div class="pbmit-icon-close">
            <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                viewBox="0 0 26.163 26.163">
                <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
            </svg>
        </div>
        <div class="pbmit-search-outer">
            <form class="pbmit-site-searchform">
                <input type="search" class="form-control field searchform-s" name="submit" placeholder="Search …">
                <button type="submit"></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
		============================================ -->
    <!-- jQuery JS -->
    <script>
        let formSelector = document.getElementById("form-selector");
        let formContainers = document.querySelectorAll(".form-container");

        formSelector.addEventListener("change", function () {
            let val = formSelector.value;

            if (val) {
                showFormContainer(val);
            } else {
                hideAllFormContainers();
            }
        });

        function showFormContainer(id) {
            formContainers.forEach(container => {
                if (container.id === id) {
                    container.style.display = "block"; // Show the selected form container
                    container.querySelectorAll("input, select").forEach(element => {
                        element.removeAttribute(
                            "disabled"); // Enable all inputs and selects in the active form container
                    });
                } else {
                    container.style.display = "none"; // Hide other form containers
                    container.querySelectorAll("input, select").forEach(element => {
                        element.setAttribute("disabled",
                            true); // Disable all inputs and selects in other form containers
                    });
                }
            });
        }

        function hideAllFormContainers() {
            formContainers.forEach(container => {
                container.style.display = "none"; // Hide all form containers
                container.querySelectorAll("input, select").forEach(element => {
                    element.setAttribute("disabled",
                        true); // Disable all inputs and selects in all form containers
                });
            });
        }


        document.getElementById('refresh-captcha').onclick = function() {
            var captcha = document.getElementById('captcha-img');
            captcha.src = '{{ captcha_src('math') }}' + '?' + Math.random();
        }
    </script>
    
    
    @include('layouts.landing-partial.script')

</body>

</html>