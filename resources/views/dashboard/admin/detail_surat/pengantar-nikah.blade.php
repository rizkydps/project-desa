
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
                        <label for="exampleFormControlInput">Nama Suami :</label>
                        <input type="text" class="form-control"  value="{{ $surat->name }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">NIK  Suami:</label>
                        <input type="text" class="form-control"  value="{{ $surat->nik }}" readonly>
                    </div>
                </div>

                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Whatsapp Suami :</label>
                        <input type="text" class="form-control"  value="{{ $surat->whatsapp }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Tempat Lahir Suami :</label>
                        <input type="text" class="form-control"  value="{{ $surat->tempat_lahir }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Tanggal Lahir  Suami:</label>
                        <input type="text" class="form-control"  value="{{ $surat->tanggal_lahir }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Agama Suami :</label>
                        <input type="text" class="form-control"  value="{{ $surat->agama}}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Nama Istri :</label>
                        <input type="text" class="form-control"  value="{{ $surat->name }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">NIK Istri :</label>
                        <input type="text" class="form-control"  value="{{ $surat->nik }}" readonly>
                    </div>
                </div>

                <div class="row mb-3 ">
                    
                    <div class="col">
                        <label for="exampleFormControlInput">Tempat Lahir Istri:</label>
                        <input type="text" class="form-control"  value="{{ $surat->tempat_lahir }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Tanggal Lahir Istri:</label>
                        <input type="text" class="form-control"  value="{{ $surat->tanggal_lahir }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Agama Istri:</label>
                        <input type="text" class="form-control"  value="{{ $surat->agama}}" readonly>
                    </div>
                </div>


                <div class="col  mb-3">
                    <label for="exampleFormControlInput">Foto Suami : </label>
                    <img src="{{ asset('storage/img/surat/ktp/'. $surat->foto_ktp )}}" class="img-fluid"style="width:300px; height:150px;" alt="">
                </div>
                
                <div class="row mb-3 ">
                    
                    <div class="col  mb-3">
                        <label for="exampleFormControlInput">Foto Istri : </label>
                        <img src="{{ asset('storage/img/surat/ktp/'. $surat->foto_ktp )}}" class="img-fluid"style="width:300px; height:150px;" alt="">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Foto Pengantarr : </label>
                        <img src="{{ asset('storage/img/surat/pengantar/'. $surat->foto_pengantar )}}" class="img-fluid"style="width:200px; height:250px;" alt="">
                    </div>
                </div>


                <form action="{{ route('dashboard.permintaan.update', $surat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <label for="status">Status Surat:</label>
                        <select class="form-control mb-3" name="status" id="status">
                            <option selected disabled>Ubah Status Surat :</option>
                            <option value="3" @if($surat->status == 3) selected @endif>Di Tolakk</option>
                            <option value="1" @if($surat->status == 1) selected @endif>Di Setujui</option>
                        </select>
                    </div>
                    
                    <div class="row">
                        <label for="nomor_surat">Nomor Surat :</label>
                        <input type="text" class="form-control"  placeholder="Isi Nomor Surat">
                    </div>

                    


                    
                
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