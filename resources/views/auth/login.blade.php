<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Login</title>
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{asset('dist/css/pages/authentication.css')}}" rel="stylesheet">
        <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
		<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link rel="stylesheet" type="text/css" href="{{asset('toastr.css')}}">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Enotary...</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg2.jpg) no-repeat left center;">
            <div class="container">
                <div class="row">
                    <div class="col s12 l8 m6 demo-text">
                        <span class="db"><img src="{{asset('logo2.png')}}" alt="logo" width="100%" height="50%"/></span>
                        <h1 class="font-light m-t-40">Selamat Datang Di <span class="font-medium black-text">Enotary</span></h1>
                        <p  class="font-medium black-text">Mobility Tools Of Notary</p>

                    </div>
                </div>
                <div class="auth-box auth-sidebar">
                    <div id="loginform">
                        <div class="p-l-10">
                            <h5 class="font-medium m-b-0 m-t-40"></h5>
                            <small>Cukup login ke akun Anda</small>
                        </div>
                        <!-- Form -->
                        <div class="row">
                        <form class="col s12" action="{{route('login')}}" method="POST">
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" required name="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" required name="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-5">
                                    <div class="col s7">
                                        <label>
                                            <input type="checkbox" name="remember"/>
                                            <span>Ingat perangkat?</span>
                                        </label>
                                    </div>
                                    <div class="col s5 right-align"><a href="#" class="link" id="to-recover">Sumbit Token?</a></div>
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                        <div class="center-align m-t-20 db">
                            <a href="#" class="btn indigo darken-1 tooltipped m-r-5" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-facebook-f"></i></a> <a href="#" class="btn orange darken-4 tooltipped" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                        <div class="center-align m-t-20 db">
                        Belum punya akun? <a href="{{route('register')}}">Daftar!</a>
                        </div>

                    </div>
                    <div id="recoverform">
                        <div class="p-l-10">
                            <h5 class="font-medium m-b-0 m-t-40">Token</h5>
                            <small>Enter your Email and instructions will be sent to you!</small>
                        </div>
                        <div class="row">
                            <!-- Form -->
                        <form class="col s12" action="{{route('token')}}" method="post">
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email1" type="text" class="validate" required>
                                        <label for="email1">Token</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-20">
                                    <div class="col s12">
                                        <button class="btn-large w100 red" type="submit" name="action">Submit</button>
                                    </div>
                                </div>
                                <div class="col s5 right-align"><a href="#" class="link" id="login">Login?</a></div>
@csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dist/js/materialize.min.js')}}"></script>
    <script src="{{asset('toastr.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    @error('email')

    <script>
       toastr["error"]("{{ $message }}")
    </script>

</span>
@enderror
@toastr_render
    <script>
    $('.tooltipped').tooltip();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
        $("#showtoken").fadeIn();
    });
    $('#login').on("click", function() {
        $("#loginform").fadeIn();
        $("#recoverform").slideUp();
        $("#showtoken").slideUp();
    });
    $('#token').on("click", function() {
        $("#showtoken").fadeIn();
        $("#loginform").slideUp();
        $("#recoverform").slideUp();
    });
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>
</body>

</html>
