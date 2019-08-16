@extends('layouts.master')
@section('css')

@endsection
@section('title')
Create New
@endsection
@section('atas')
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Settings</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#" class="breadcrumb">Settings</a>
            <a href="#" class="breadcrumb">Product Create</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col s12">
    <div class="card">
        <div class="card-content">
        <form action="{{route('product.store')}}" method="POST">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="product_name" required>
                        <label for="name">Nama Produk  / Layanan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="price" required onkeypress="return angka(event)">
                        <label for="email">Harga</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

@section('js')

@endsection
@section('script')

@endsection
