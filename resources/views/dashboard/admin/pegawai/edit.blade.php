@extends('layouts.admin-partial.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pegawai</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('dashboard.pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 ">
                        <div class="col">
                            <label for="exampleFormControlInput">Nama Pegawai :</label>
                            <input type="text" class="form-control" name="name" value="{{ $pegawai->name }}">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col">
                            <label for="exampleFormControlInput">Jabatan :</label>
                            <input type="text" class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col">
                            <label for="exampleFormControlInput">Foto :</label>
                            <input type="file" class="form-control" name="foto">
                            <input type="hidden" name="old_foto" value="{{ $pegawai->foto }}">
                        </div>
                    </div>
                    <a href="{{ route('dashboard.pegawai.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                        class="  fa-sm text-white-50"></i>Kembali</a>
                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class=" fa-sm text-white-50"></i>Ubah</button>
                </form>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
