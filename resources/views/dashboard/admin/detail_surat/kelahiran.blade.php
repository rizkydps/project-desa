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
                        <label for="exampleFormControlInput">Hari Lahir :</label>
                        <input type="text" class="form-control"  value="{{ $surat->hari_lahir }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Tanggal Lahir :</label>
                        <input type="text" class="form-control"  value="{{ $surat->tanggal_lahir }}" readonly>
                    </div>
                </div>

                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Jam Lahir :</label>
                        <input type="text" class="form-control"  value="{{ $surat->jam_lahir }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Jenis kelamin :</label>
                        <input type="text" class="form-control"  value="{{ $surat->jenis_kelamin }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Berat Badan :</label>
                        <input type="text" class="form-control"  value="{{ $surat->berat_badan }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Panjang Badan :</label>
                        <input type="text" class="form-control"  value="{{ $surat->panjang_badan }}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Nama Ayah :</label>
                        <input type="text" class="form-control"  value="{{ $surat->name }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Nama Ibu :</label>
                        <input type="text" class="form-control"  value="{{ $surat->name}}" readonly>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="exampleFormControlInput">Nomor Pemohon :</label>
                        <input type="text" class="form-control"  value="{{ $surat->whatsapp }}" readonly>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput">Pekerjaan Orang Tua :</label>
                        <input type="text" class="form-control"  value="{{ $surat->pekerjaan}}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleFormControlInput">Alamat Sekarang :</label>
                        <input type="text" class="form-control"  value="{{ $surat->alamat}}" readonly>
                    </div>
                </div>

                <div class="col  mb-3">
                    <label for="exampleFormControlInput">Foto Surat Keterangan dari
                        Bidan/Rumah Sakit :</label>
                    <img src="{{ asset('storage/img/surat/pengantar/'. $surat->pengantar )}}" class="img-fluid" style="width:300px; height:150px;" alt="">
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