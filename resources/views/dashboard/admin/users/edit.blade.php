@extends('layouts.admin-partial.master')

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.users.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" readonly value="{{ $users->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" readonly value="   {{ $users->email }}">
                    </div>
                </div>

                <div class="form-group row">

                <label for="">Role<code>*</code></label>
                    <select name="role" id="" class="form-control form-control-sm border-input">
                        @if($users->role == '1')
                           <option selected value="{{ $users->role }}">Kepala Desa</option>
                        @elseif($users->role == '2')
                            <option selected value="{{ $users->role }}">Kasi Pemerintahan</option>
                        @elseif($users->role == '3')
                            <option selected value="{{ $users->role }}">Kasi kesra dan Pelayanan</option>
                        @elseif($users->role == '4')
                            <option selected value="{{ $users->role }}">Kaur Umum dan Perencanaan</option>

                        @endif
                            <option disabled>Pilih Role</option>
                            <option value="1">Kepala Desa</option>
                            <option value="2">Kasi Pemerintahan</option>
                            <option value="3">Kasi kesra dan Pelayanan</option>
                            <option value="4">Kaur Umum dan Perencanaan</option>
                            </select>



                    {{--  <label for="role" class="col-sm-2 col-form-label">Role:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="role" name="role" value="{{ $users->role }}">
                    </div>  --}}
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('dashboard.users.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
