@extends('regist::layouts.master')
@section('title')
    Pendaftaran
@endsection
@section('content')
<div class="allcp-form theme-warning mw500" style="margin-top: 10%;" id="login">

        <div class="panel panel-alert">
            <div class="panel-heading pn">
                <div class="panel-title">Pendaftaran Tahap 1</div>
            </div>
        <form method="post" action="{{route('otp')}}" method="POST">
                <div class="panel-body pn pb10 pt25 mtn">


                    <div class="section mn">

                            <div class="smart-widget sm-right smr-80">

                                    <label for="email" class="field prepend-icon">
                                        <input type="text" name="nama_lengkap"  class="gui-input"
                                               placeholder="Nama Lengkap">
                                        <label for="email" class="field-icon text-alert">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>

                                </div>
                        <div class="smart-widget sm-right smr-80">

                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input"
                                       placeholder="Email Anda" required>
                                <label for="email" class="field-icon text-alert">
                                    <i class="fa fa-envelope-o"></i>
                                </label>
                            </label>
                            <br>
                            <div align="rigth"> <button for="email" type="submit" class="btn btn-success">Kirim</button></div>
                        <a href="{{route('login')}}">Login</a>
                        </div>
                        <!-- -------------- /Block Widget -------------- -->

                    </div>
                    <!-- -------------- /section -------------- -->
                </div>
                <!-- -------------- /Form -------------- -->
                @csrf
            </form>

        </div>

    </div>
@stop
