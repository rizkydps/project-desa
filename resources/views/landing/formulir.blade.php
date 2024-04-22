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


					<div class="appointment_box">
                        
						
						<form action="{{ route('store') }}" method="post">
							@csrf
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <select class="form-select form-control" aria-label="Default select example" id="form-selector" onchange="showForm()">
                                        <option value="">Pilih Jenis Surat :</option>
                                        <option value="form1">Surat Keterangan Domisili</option>
                                        <option value="form2">Surat keterangn pindah</option>
                                        <option value="form3">Surat pengantar Nikah</option>
                                        <option value="form4">Surat Keterangan Kematian</option>
                                        <option value="form5">Surat Keterangan  Kelahiran</option>
                                        <option value="form6">Surat Ijin Keramaian</option>
                                        <option value="form7">Surat Keterangan Tidak Mampu</option>
                                        <option value="form8">Surat Keterangan Usaha</option>
                                        <option value="form9">Surat Kehilangan</option>
                                        <option value="form10">Surat Keterangan Orang Yang Sama</option>
                                        <option value="form11">Surat Rekomendasi</option>
                                    </select>
                                </div>
                            </div>


                            <h4 class="text-center mb-3">name surat</h4>
                        
                            {{--  Surat Keterangan Domisili  --}}
					
                        <div class="form-container" id="form1">
							<div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Status Pernikahan</option>
										<option value="status_pernikahan">Sudah Menikah</option>
										<option value="status_pernikahan">Belum Menikah</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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

                            {{--  Surat keterangn pindah --}}
                        <div class="form-container" id="form2">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nomer Kartu Keluarga" name="nno_kk" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Status Pernikahan</option>
										<option value="status_pernikahan">Sudah Menikah</option>
										<option value="status_pernikahan">Belum Menikah</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Asal" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Tujuan Pindah" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alasan Pindah" name="tujuan_surat" required>
								</div>
								<div class="col-md-6">
									<input type="number" class="form-control" placeholder="Jumlah - Pengikut / keluarga yang pindah" name="pengikut_pindah" required>
								</div>

								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat pengantar Nikah  --}}
                        <div class="form-container" id="form3">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Suami" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK Suami" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp Pemohon" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir Suami" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama Suami</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								{{--  Istri  --}}

								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Istri" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK Istri" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir Istri" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama Istri</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan Istri" name="pekerjaan" required>
								</div>
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Istri" name="alamat" required>
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
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat Keterangan Kematian  --}}
                        <div class="form-container" id="form4">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Umur" name="umur" required>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Meninggal" name="tanggal" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Meninggal" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Makam" name="alamat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP Almarhum :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar/Keterangan dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat Keterangan  Kelahiran  --}}
                        <div class="form-container" id="form5">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Hari Lahir" name="hari_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Jam Lahir" name="jam_lahir" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Panjang Badan" name="panjang_badan" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Ayah" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Ibu" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp Pemohon" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Surat Keterangan dari Bidan/Rumah Sakit  :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat Ijin Keramaian  --}}
                        <div class="form-container" id="form6">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Pemohon" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK Pemohon" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Status Pernikahan</option>
										<option value="status_pernikahan">Sudah Menikah</option>
										<option value="status_pernikahan">Belum Menikah</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Pemohon" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Kegiatan" name="tujuan_surat" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Kegiatan" name="tanggal" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Tempat Kegiatan" name="alamat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP Pemohon :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat Keterangan Tidak Mampu  --}}
                        <div class="form-container" id="form7">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Status Pernikahan</option>
										<option value="status_pernikahan">Sudah Menikah</option>
										<option value="status_pernikahan">Belum Menikah</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tujuan Surat" name="tujuan_surat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="" type="file" id="formFile" name="foto_pengantar">
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
                            {{--  Surat Keterangan Usaha  --}}
                        <div class="form-container" id="form8">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Status Pernikahan</option>
										<option value="status_pernikahan">Sudah Menikah</option>
										<option value="status_pernikahan">Belum Menikah</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="name Usaha" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tahun Mulai" name="tahun_mulai" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tujuan Usaha" name="tujuan_surat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP :</label>
  									<input class="form-control" type="file" id="formFile" name="foto_ktp">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Pengantar dari Rt/Rw :</label>
  									<input class="form-control" type="file" id="formFile" name="foto_pengantar">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KK :</label>
  									<input class="form-control" type="file" id="formFile" name="foto_kk">
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
                            {{--  Surat Kehilangan  --}}
                        <div class="form-container" id="form9">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Barang Hilang" name="name" required>
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
									<label for="formFile" class="form-label">Foto bpkb/stnk (jika kendaraan) :</label>
  									<input class="" type="file" id="formFile" name="foto_bukti">
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto Buku Tabungan (jika kartu atm) :</label>
  									<input class="" type="file" id="formFile" name="foto_bukti">
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
                            {{--  Surat Keterangan Orang Yang Sama  --}}
                        <div class="form-container" id="form10">
							<div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>


								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>

								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
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
                        <div class="form-container" id="form11">
                            <div class="row ">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="NIK" name="nik" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="No Whatsapp" name="whatsapp" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
								</div>
								{{--  <div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>  --}}
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Jenis Kelamin</option>
										<option value="jenis_kelamin">Laki - Laki</option>
										<option value="jenis_kelamin">Perempuan</option>

										
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Warganegara</option>
										<option value="warganegara">WNI</option>
										<option value="warganegara">WNA</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="">Pilih Agama</option>
										<option value="agama">Islam</option>
										<option value="agama">Kristen</option>
										<option value="agama">Buddha</option>
										<option value="agama">Hindu</option>
										<option value="agama">Kong Hu Cu</option>
									</select>
								</div>
								
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" required>
								</div>
								
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Tujuan Surat" name="tujuan_surat" required>
								</div>
								<div class="col-md-6">
									<label for="formFile" class="form-label">Upload Foto KTP :</label>
  									<input class="" type="file" id="formFile" name="foto_ktp">
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
			<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
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
        function showForm() {
            // Mengambil elemen select dengan id form-selector
            var formSelector = document.getElementById("form-selector");
          
            // Mengambil nilai yang dipilih dari elemen select
            var selectedForm = formSelector.options[formSelector.selectedIndex].value;
          
            // Semua form dicek dulu untuk disembunyikan
            var formContainers = document.getElementsByClassName("form-container");
            for (var i = 0; i < formContainers.length; i++) {
                formContainers[i].style.display = "none";
            }
          
            // Form yang dipilih ditampilkan
            document.getElementById(selectedForm).style.display = "block";
          }
    </script>
	@include('layouts.landing-partial.script')

	</body>

</html>