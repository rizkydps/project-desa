@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <a href="{{ route('dashboard.pegawai.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Pegawai</a>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Namas</th>
                                            <th>Jabatan </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                    
                                    <tbody>
                                        @foreach($pegawais as $pegawai)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $pegawai->name}}</td>

                                            <td>{{ $pegawai->jabatan}}         
                                            <td>
                                                <a href="{{ route('dashboard.pegawai.edit', $pegawai->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                        

                                            </td>
                                        </tr>
                                        @endforeach
                                        
                            
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  


@endsection
