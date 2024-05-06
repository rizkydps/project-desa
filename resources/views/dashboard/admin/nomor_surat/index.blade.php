@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                {{--  <a href="{{ route('kategori-surat.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori Surat</a>  --}}

                                <table class="table table-bordered mt-3"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($no_surat as $no_surats)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $no_surats->nomor_surat }}</td>
                                            <td>
                                                <a href="{{ route('kategori-surat.edit', $kategori->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                                {{--  <a href=""><button type="button" class="btn btn-danger"><i class="fas fa-print"></i></button></a>  --}}
                                                <a href="{{ route('kategori-surat.destroy', $kategori->id) }}"
                                                    onclick="event.preventDefault();
                                                             if (confirm('Are you sure you want to delete this category?')) {
                                                                 document.getElementById('delete-kategori-{{ $kategori->id }}').submit();
                                                             }">
                                                     <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                 </a>

                                                 <form id="delete-kategori-{{ $kategori->id }}" action="{{ route('kategori-surat.destroy', $kategori->id) }}" method="POST" style="display: none;">
                                                     @csrf
                                                     @method('DELETE')
                                                 </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                                {{--  <a href="{{ route('kategori-surat.create') }}">Tambah Kategori Surat</a>

                                    <ul>
                                        @foreach ($kategori_surat as $kategori)
                                            <li>{{ $kategori->name }}</li>
                                            <a href="{{ route('kategori-surat.edit', $kategori->id) }}">Edit</a>
                                            <form action="{{ route('kategori-surat.destroy', $kategori->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        @endforeach
                                    </ul>  --}}
                            </div>
                        </div>
                    </div>

                </div>



                <!-- /.container-fluid -->

@endsection
