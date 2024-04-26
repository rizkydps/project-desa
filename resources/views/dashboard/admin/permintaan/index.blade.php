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
                                            <th>Nama Pemohon</th>
                                            <th>Jenis Surat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                    
                                    <tbody>
                                        @foreach($permintaans as $permintaan)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $permintaan->name}}</td>
                                            <td>
                                                @php
                                                $categories = [
                                                    1 => 'Surat Keterangan Domisili',
                                                    2 => 'Surat Keterangan Pindah',
                                                    3 => 'Surat Pengantar Nikah',
                                                    4 => 'Surat Keterangan Kematian',
                                                    5 => 'Surat Keterangan Kelahiran',
                                                    6 => 'Surat Ijin Keramaian',
                                                    7 => 'Surat Keterangan Tidak Mampu',
                                                    8 => 'Surat Keterangan Usaha',
                                                    9 => 'Surat Kehilangan',
                                                    10 => 'Surat Keterangan Orang Yang Sama',
                                                    11 => 'Surat Rekomendasi'
                                                ];
                                                @endphp
                                                {{ $categories[$permintaan->kategori_surat] ?? 'Tidak Di ketahui' }}
                                            </td>
                                            

                                            <td>
                                                @if($permintaan->status == 0)
                                                <span class="btn btn-warning">
                                                
                                                    Menunggu DiSetujui
                                                </span>
                                                @else
                                                <span class="btn btn-danger">
                                                
                                                    Ditolak
                                                </span>
                                                @endif  
                                            </td>
                                                    
                                                <td>
                                                    <a class="btn btn-outline-info" href="{{ route('dashboard.permintaan.show', $permintaan->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                                @php
                                                $wa = '62' . substr($permintaan->whatsapp,1);
                                                $wa = intval($wa);
                
                                                @endphp
                                                <a href="https://wa.me/{{ $wa }}"><button type="button" class="btn btn-success"><i
                                                            class="fab fa-whatsapp"></i></button></a>
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                            
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  

                

               
                <!-- /.container-fluid -->

@endsection
