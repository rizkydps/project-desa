<!-- resources/views/dashboard/admin/users/create.blade.php -->

@extends('layouts.admin-partial.master')

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('dashboard.users.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name">Nama :</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="role">Role :</label>
                            <select class="form-control" name="role">
                                <option value="1">Kepala Desa</option>
                                <option value="2">Kasi Pemerintahan</option>
                                <option value="3">Kasi kesra dan Pelayanan</option>
                                <option value="4">Kaur Umum dan Perencanaan</option>
                            </select>
                        </div>
                    </div>
    
                    <a href="{{ route('dashboard.users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
                    </a>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-check fa-sm text-white-50"></i> Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
