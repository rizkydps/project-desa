@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('kategori-surat.store') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3  ">
                                      <div class="col">
                                        <label for="exampleFormControlInput">Nama Kategori :</label>
                                        <input type="text" class="form-control" name="name">
                                      </div>
                                    </div>
                                
                                    <a href="{{ route('kategori-surat.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                        class="  fa-sm text-white-50"></i>Kembali</a>
                                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                            class=" fa-sm text-white-50"></i>Tambah</button>
                                  </form>
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
