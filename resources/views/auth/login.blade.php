<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- -------------- Fonts -------------- -->
    {{-- <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'> --}}

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/allcp/forms/css/forms.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('toastr.css')}}">
    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="{{asset('icon.png')}}">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c" style="background-image: url({{asset('bg-1.jpg')}});">

<!-- -------------- Body Wrap  -------------- -->
<div id="main" class="animated fadeIn">

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- -------------- Content -------------- -->
        <section id="content">

            <!-- -------------- Login Form -------------- -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="text-center mb20"><img src="logo.jpg" class="img-responsive"
                                                   alt="Logo"/></div>
                <div class="panel mw320">

                <form method="post" action="{{route('login')}}" method="POST">
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="email" id="username" class="gui-input"
                                           placeholder="Username">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Password" required>
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                    <p>@langapp('belum ada akun')</p>
                                <a href="{{route('register')}}">Daftar</a>
                                <a href="{{route('step2')}}">Verifikasi Token</a>
                                </div>
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Log in</button>
                            </div>
                            <!-- -------------- /section -------------- -->

                        </div>
                        <!-- -------------- /Form -------------- -->
                        @csrf
                    </form>
                </div>
                <!-- -------------- /Panel -------------- -->
            </div>
            <!-- -------------- /Spec Form -------------- -->

        </section>
        <!-- -------------- /Content -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="{{asset('assets/js/jquery/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="{{asset('assets/js/plugins/canvasbg/canvasbg.js')}}"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="{{asset('assets/js/utility/utility.js')}}"></script>
<script src="{{asset('assets/js/demo/demo.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('toastr.js')}}"></script>
@error('email')

    <script>
       toastr["error"]("{{ $message }}")
    </script>

</span>
@enderror
@toastr_render
<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        //Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
