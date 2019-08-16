@extends('layouts.master')
@section('title')
Settings
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/js/plugins/datatables/extensions/Editor/css/dataTables.editor.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/js/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')}}">
@endsection
@section('atas')
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Settings</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#" class="breadcrumb">Settings</a>
            <a href="#" class="breadcrumb">Index</a>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="col l3 m6 s12">
    <div class="card">
        <div class="card-content center-align">
            <div>
            <span class="cyan-text display-6"><a href="{{route('product.index')}}"><img src="{{asset('icon/produk.svg')}}" alt="" width="80" height="70" class="faa faa-tada animated"></a></span>
            </div>
            <div>

                <h6 class="red-text font-medium m-b-0">Product Services</h6>
            </div>
        </div>
    </div>
</div>
<div class="col l3 m6 s12">
    <div class="card">
        <div class="card-content center-align">
            <div>
                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/com.svg')}}" alt="" width="80" height="70" class="faa faa-tada animated"></a></span>
            </div>
            <div>

                <h6 class="blue-text font-medium m-b-0">Company</h6>
            </div>
        </div>
    </div>
</div>
<div class="col l3 m6 s12">
    <div class="card">
        <div class="card-content center-align">
            <div>
                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/produk.svg')}}" alt="" width="80" height="70" class="faa faa-tada animated"></a></span>
            </div>
            <div>

                <h6 class="red-text font-medium m-b-0">Product Services</h6>
            </div>
        </div>
    </div>
</div>
<div class="col l3 m6 s12">
    <div class="card">
        <div class="card-content center-align">
            <div>
                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/produk.svg')}}" alt="" width="80" height="70" class="faa faa-tada animated"></a></span>
            </div>
            <div>

                <h6 class="red-text font-medium m-b-0">Product Services</h6>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script src="{{asset('assets/js/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>

@endsection
@section('script')

@endsection
