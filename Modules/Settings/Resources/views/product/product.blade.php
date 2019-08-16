@extends('layouts.master')
@section('css')
<link href="{{asset('dist/css/pages/data-table.css')}}" rel="stylesheet">
<link href="{{asset('alert.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('title')
Product List
@endsection
@section('atas')
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Settings</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#" class="breadcrumb">Settings</a>
            <a href="#" class="breadcrumb">Product</a>
        </div>
    </div>
</div>

@endsection
@section('content')
<div class="col s12">
    <div class="card">
        <div class="card-content">
        <a href="{{route('product.create')}}" class="waves-effect waves-light btn" style="float: right"><i class="material-icons">add</i>Tambah</a>
            <table class="responsive-table" id="product">
                <thead>
                    <tr>
                        <th>Nama Jasa</th>
                        <th>Harga</th>
                        <th>Dibuat Oleh</th>
                        <th>Dibuat Tanggal</th>
                        <th>#</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Jasa</th>
                        <th>Harga</th>
                        <th>Dibuat Oleh</th>
                        <th>Dibuat Tanggal</th>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('alert.js')}}"></script>

@endsection
@section('script')
<script>
var hapus;


  var table=  $('#product').DataTable({
        processing: true,
        serverSide: true,
        lengthMenu: [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
              paging: true,
              pageLength:5,
        ajax: {
            url: '{{route('get.product')}}',
            method: 'POST'
        },
        columns: [
            {data: 'product_name', name: 'product_name'},
            {data: 'price', name: 'price'},
            {data: 'name', name: 'users.name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action',searchable: false}
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement('input');
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column.search(val ? val : '', true, false).draw();
                });
            });
        }
    });
    hapus =function(id){
        swal({
  title: "Apakah kamu yakin?",
  text: "Anda tidak akan dapat memulihkan data ini!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "cyan",
  confirmButtonText: "Ya",
  cancelButtonText: "Tidak!",
  cancelButtonClass: "red",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
    $.ajax({
        type: "GET",
        url: "{{url('settings/product/delete')}}/"+id,//http://enotary-local.net/settings/product/delete/3?uuid=458bbe1a-ae28-4c5f-b4f2-ec5e906ff3ee

        dataType: "json",
        success: function (data) {

            swal("Data Terhapus!", "Your imaginary file has been deleted.", "success");
            table.ajax.reload();
        },
        error: function(data){
            swal("Error", "Terjadi Kesalahan"+data, "error");
            console.log(data);
        }
    });

  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
    }


</script>
@endsection
