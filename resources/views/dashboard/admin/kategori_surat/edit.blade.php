@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                        <form action="{{ route('kategori-surat.update', $kategoriSurat->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3 ">
                            <div class="col">
                                <label for="exampleFormControlInput">Nama Kategori :</label>
                                <input type="text" class="form-control" name="name" value="{{ $kategoriSurat->name }}">
                            </div>
                            </div>
                            <a href="{{ route('kategori-surat.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
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



