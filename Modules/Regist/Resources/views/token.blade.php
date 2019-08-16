@extends('regist::layouts.master')
@section('title')
Token
@endsection
@section('content')
        <!-- -------------- Content -------------- -->
        <section id="content" class="animated fadeIn">

            <div class="allcp-form theme-warning mw500" style="margin-top: 10%;" id="login">


                <div class="panel panel-alert">
                    <div class="panel-heading pn">
                        <div class="panel-title">Verifikasi Token</div>
                    </div>
                <form method="post" action="{{route('token')}}" id="contact" method="POST">
                        <div class="panel-body pn pb10 pt25 mtn">


                            <div class="section mn">

                                <div class="smart-widget sm-right smr-80">
                                    <label for="email" class="field prepend-icon">
                                        <input type="text" name="token" id="email" class="gui-input"
                                               placeholder="Token Anda">
                                        <label for="email" class="field-icon text-alert">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                    </label>
                                    <button for="email" class="button" type="submit">Kirim</button>
                                </div>
                                <!-- -------------- /Block Widget -------------- -->
                                @csrf
                            </div>
                            <!-- -------------- /section -------------- -->
                        </div>
                        <!-- -------------- /Form -------------- -->

                    </form>
                <a href="{{route('login')}}">Login</a>
                </div>

            </div>

        </section>
        <!-- -------------- /Content -------------- -->

@stop
