@extends('layouts.admin-partial.master')
@push('dashboard_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@endpush

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
                <table class="table table-bordered" id="suratTable" width="100%" cellspacing="0">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<input type="hidden" id="surat_data" value="{{ route('dashboard.surat.records')}}">
@push('dashboardjs')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function () {
    function reloadTable(id){
        var table = $(id).DataTable();
        table.cleanData;
        table.ajax.reload();
    }
    $('#suratTable').DataTable({
        ordering: true,
        pagination: true,
        deferRender: true,
        serverSide: true,
        responsive: true,
        processing: true,
        pageLength: 50,
        ajax: {
            'url': $('#surat_data').val(),
            'data': function (data) {
                data.kategori_surat = $('#kategori_surat').val();

            }
        },
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
            { data: 'name', name: 'name'},
            { data: 'kategori_name', name: 'kategori_name'},
            { data: 'status', name: 'status', 
                render : function (status){
                    if(status == 1){
                        return 'Di Terima';
                    }else{
                        return 'Di Tolak';
                    }
                }
            },
            
           
            { data: 'options',name: 'options', orderable: false, searchable: false },
        ],
    });
   $('#kategori_surat').on('change', function () {
    reloadTable('#suratTable');
   })

});
</script>
@endpush

@endsection

