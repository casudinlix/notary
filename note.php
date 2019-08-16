@extends('layouts.master')
@section('css')

@endsection
@section('title')
Service Product
@endsection
@section('atas')

@endsection
@section('content')

@endsection

@section('js')

@endsection
@section('script')

@endsection


DB::beginTransaction();

    try {
        DB::commit();
        // all good
        toastr()->success('Silahkan Masukan Token Anda Terlebih Dahulu', 'Sukses!');
    } catch (\Exception $e) {
        DB::rollback();
        toastr()->error($e->getMessage(), 'Error');
        return redirect()->back();
    }

--Session
set session $token=session(['token' => $id]);
delete Session
  {{dd(session()->forget('token'))}}
  menampilakn Session
  session('nama session')

data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-facebook-f"></i></a> <a href="#" class="btn orange darken-4 tooltipped" data-position="top" data-tooltip="Login with Facebook"
