@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{ route('dashboard.users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
                                <table class="table table-bordered mt-3"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->role == '1')
                                                    Kepala Desa
                                                @elseif($user->role == '2')
                                                    Kasi Pemerintahan
                                                @elseif($user->role == '3')
                                                    Kasi kesra dan Pelayanan
                                                @elseif($user->role == '4')
                                                    Kaur Umum dan Perencanaan
                                                @else
                                                    User
                                                @endif
                                                            
                                             </td>
                                        
                                           
                                                <td>
                                                    <a href="{{ route('dashboard.users.edit', $user->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                                    {{--  <a href=""><button type="button" class="btn btn-danger"><i class="fas fa-print"></i></button></a>  --}}
                                                    <a href="{{ route('dashboard.users.destroy', $user->id) }}"
                                                        onclick="event.preventDefault();
                                                                 if (confirm('Are you sure you want to delete this category?')) {
                                                                     document.getElementById('delete-user-{{ $user->id }}').submit();
                                                                 }">
                                                         <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                     </a>
    
                                                     <form id="delete-user-{{ $user->id }}" action="{{ route('dashboard.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                                         @csrf
                                                         @method('DELETE')
                                                     </form>
    
                                                </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data diri Pemohon</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-4">
                                    <p>Nama        :   Putri</p>
                                    <p>Nik        :   Putri</p>

                                    <p>Alamat        :   Putri</p>

                                    <p>Pekerjaan        :   Putri</p>

                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-8 col-sm-6">
                                      Foto Ktp:
                                      <img src="../public/landing/images/kal.png" alt="">
                                    </div>
                                    <div class="col-4 col-sm-6">
                                      foto Surat Pengantar:
                                      <img src="https://unsplash.com/photos/white-printer-paper-on-white-textile-lFe1giUJ6CQ" alt="">
                                    </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                </div>
                <!-- /.container-fluid -->

@endsection
