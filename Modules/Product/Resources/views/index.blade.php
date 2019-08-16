@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{asset('assets/js/plugins/datatables/extensions/Editor/css/dataTables.editor.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{asset('assets/js/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')}}">

@endsection
@section('title')
Service Product
@endsection
@section('atas')
<header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="dashboard1.html">
                        <span class="fa fa-cubes"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                <a href="#">Product</a>
                </li>
                <li class="breadcrumb-link">
                <a href="{{route('home')}}">Setting</a>
                </li>
                <li class="breadcrumb-current-item">Product</li>
            </ol>
        </div>

    </header>

@endsection
@section('content')


    <section id="content" class="animated fadeIn">
        <div class="topbar-menu row">
        <div class="col-md-12">
        <div class="panel panel-visible" id="spy4">
            <div class="panel-heading">
            <a class="btn btn-success pull-right" href="{{route('product.create')}}"><i class="imoon imoon-plus">add</i>Add New Row</a>

                <div class="panel-title hidden-xs">
                    Service List

                </div>

            </div>
            <div class="panel-body pn">

                <div class="table-responsive">

                    <table class="table table-striped table-hover display" id="product"
                           cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>City</th>
                            <th class="hidden-xs">State</th>
                            <th class="hidden-xs">State</th>
                        </tr>
                        </thead>
                        <tfoot>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>City</th>
                                <th class="hidden-xs">State</th>
                                <th class="hidden-xs">State</th>
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        </div></section>

@endsection

@section('js')
{{-- <script src="{{asset('assets/js/plugins/datatables/media/js/jquery.dataTables.js')}}"></script> --}}
<script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>


@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#product').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route('get.product')}}',
            method: 'POST'
        },
        columns: [
            {data: 'product_name', name: 'product_name'},
            {data: 'price', name: 'price'},
            {data: 'created_by', name: 'created_by'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'}
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val()).draw();
                });
            });
        }
    });
    });

</script>
@endsection
