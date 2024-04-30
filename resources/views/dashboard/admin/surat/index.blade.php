@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Surat</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="form-group">
                    <h5>Filter Surat</h2>
                        <select name="kategori_surat" class="form-control form-select" id="kategori_surat">
                            <option selected disabled>Pilih Kategori Surat</option>
                            @foreach ($kategoris as $kategori_surat)
                            <option value="{{ $kategori_surat->id }}">{{ $kategori_surat->name }} </option>
                            @endforeach
                        </select>
                </div>
            </div>
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
                                @if($permintaan->kategori_surat == 1)
                                Surat Keterangan Domisili
                                @elseif($permintaan->kategori_surat == 2)
                                Surat Keterangan Pindah
                                @elseif($permintaan->kategori_surat == 3)
                                Surat Pengantar Nikah
                                @elseif($permintaan->kategori_surat == 4)
                                Surat Keterangan Kematian
                                @elseif($permintaan->kategori_surat == 5)
                                Surat Keterangan Kelahiran
                                @elseif($permintaan->kategori_surat == 6)
                                Surat Ijin Keramaian
                                @elseif($permintaan->kategori_surat == 7)
                                Surat Keterangan Tidak Mampu
                                @elseif($permintaan->kategori_surat == 8)
                                Surat Keterangan Usaha
                                @elseif($permintaan->kategori_surat == 9)
                                Surat Kehilangan
                                @elseif($permintaan->kategori_surat == 10)
                                Surat Keterangan Orang Yang Sama
                                @elseif($permintaan->kategori_surat == 11)
                                Surat Rekomendasi
                                @endif
                            </td>


                            <td><span class="btn btn-success">
                                    @if($permintaan->status = 1)
                                    Menunggu Setujui
                                    @elseif($permintaan->status = 1)
                                    DiTerima
                                    @else
                                    Di Tolak
                                    @endif
                                </span></td>

                            <td>
                                 {{--  {{ route('dashboard.surat.cetak_surat', ['slug' => $permintaan->slug]) }}  --}}
                                 <a href="{{ route('dashboard.surat.cetak_pdf', ['kategori_surat' => $permintaan->kategori_surat]) }}">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </a>
                                
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



@endsection