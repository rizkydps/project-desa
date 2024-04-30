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
        <select class="form-select form-control" name="jenis_kelamin" aria-label="Default select example">
            <option disabled selected	>Jenis Kelamin</option>
            <option value="jenis_kelamin">Laki - Laki</option>
            <option value="jenis_kelamin">Perempuan</option>


            </select>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Umur" name="umur">
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


@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Surat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Nama :</label>
                        <input type="text" class="form-control"  value="{{ $surat->name }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">NIK :</label>
                        <input type="text" class="form-control"  value="{{ $surat->nik }}" readonly>
                    </div>
                </div>

                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Whatsapp :</label>
                        <input type="text" class="form-control"  value="{{ $surat->whatsapp }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Tempat Lahir :</label>
                        <input type="text" class="form-control"  value="{{ $surat->tempat_lahir }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Tanggal Lahir :</label>
                        <input type="text" class="form-control"  value="{{ $surat->tanggal_lahir }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Jenis kelamin :</label>
                        <input type="text" class="form-control"  value="{{ $surat->jenis_kelamin }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Umur :</label>
                        <input type="text" class="form-control"  value="{{ $surat->umur }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Pekerjaan :</label>
                        <input type="text" class="form-control"  value="{{ $surat->pekerjaan }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Alamat Sekarang :</label>
                        <input type="text" class="form-control"  value="{{ $surat->alamat}}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Tanggal Meninggal :</label>
                        <input type="text" class="form-control"  value="{{ $surat->tanggal}}" readonly>
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleFormControlInput">Tempat Meninggal :</label>
                        <input type="text" class="form-control"  value="{{ $surat->alamat}}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Alamat Makam :</label>
                        <input type="text" class="form-control"  value="{{ $surat->alamat}}" readonly>
                    </div>
                </div>

               
                
                <div class="row mb-3 ">
                    <div class="col  mb-3">
                        <label for="exampleFormControlInput">Foto KTP : </label>
                        <img src="{{ asset('storage/img/surat/ktp/'. $surat->foto_ktp )}}" class="img-fluid"style="width:300px; height:150px;" alt="">
                    </div>
                    
                    <div class="col">
                        <label for="exampleFormControlInput">Foto Pengantar : </label>
                        <img src="{{ asset('storage/img/surat/pengantar/'. $surat->foto_pengantar )}}" class="img-fluid"style="width:200px; height:250px;" alt="">
                    </div>
                </div>


                <form action="{{ route('dashboard.permintaan.update', $surat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <label for="status">Status Surat:</label>
                    <select class="form-control mb-3" name="status" id="status">
                        <option selected disabled>Ubah Status Surat :</option>
                        <option value="3" @if($surat->status == 3) selected @endif>Di Tolak</option>
                        <option value="1" @if($surat->status == 1) selected @endif>Di Setujui</option>
                    </select>


                    
                
                    <a href="{{ route('dashboard.permintaan.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                        class="  fa-sm text-white-50"></i>Kembali</a>
                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class=" fa-sm text-white-50"></i>Ubah Status</button>
                </form> 
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

@endsection