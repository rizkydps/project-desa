@extends('layouts.admin-partial.master')


@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Buat Berita</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{ route('buat-berita.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Berita</a>

                                <table class="table table-bordered mt-3"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
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
@push('style')
<link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@push('script')
<!-- Chart piety plugin files -->
<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script> 

<script>
    $(function() {
        $('#dataTable').DataTable({
            "processing"    : true,
            "serverSide"    : true,
            "responsive"    : true,
            "autoWidth"     : true,
            ajax: '{{ route('blog.data') }}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, sortable: false},
                {data: 'name'},
                {data: 'slug', 
                    "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+oData.slug+"'>"+oData.slug+"</a>");
                    }
                },
                {data: 'action'}
            ]
        })
    }
    )
</script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

<script src="{{ asset('admin/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
@endpush

