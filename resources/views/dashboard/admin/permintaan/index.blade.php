@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Permintaan Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pengajuan</th>
                                            <th>Nama Pemohon</th>
                                            <th>Lihat Data</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Pak Adi</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                                            class="fas fa-eye"></i></button></td>
                                            <td><button type="button" class="btn btn-info">Menunggu</button></td>
                                                    
                                            <td>
                                                <a href=""><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                                {{--  <a href=""><button type="button" class="btn btn-danger"><i class="fas fa-print"></i></button></a>  --}}
                                                <a href=""><button type="button" class="btn btn-success"><i class="fas fa-info"></i></button></a>

                                            </td>
                                        </tr>
                            
                                        
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
