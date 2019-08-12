<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
<title>{{env('APP_NAME')}} | @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    {{-- <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'> --}}

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/allcp/forms/css/forms.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/tagmanager/tagmanager.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/datepicker/css/bootstrap-datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/plugins/select2/css/core.css')}}">
    <!-- -------------- Favicon -------------- -->
<link rel="shortcut icon" href="{{asset('icon.png')}}">
@yield('css')

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">

<!-- -------------- Body Wrap  -------------- -->
<div id="main" class="animated fadeIn">

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- -------------- Content -------------- -->
        <section id="content" class="animated fadeIn">

           @yield('content')

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
@yield('js')
<script src="{{asset('assets/js/utility/utility.js')}}"></script>
<script src="{{asset('assets/js/demo/demo.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('toastr.js')}}"></script>
@toastr_render
<script src="{{asset('assets/js/plugins/globalize/globalize.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/moment/moment.min.js')}}"></script>

<!-- -------------- BS Dual Listbox JS -------------- -->
<script src="{{asset('assets/js/plugins/duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

<!-- -------------- Bootstrap Maxlength JS -------------- -->
<script src="{{asset('assets/js/plugins/maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- -------------- Select2 JS -------------- -->
<script src="{{asset('assets/js/plugins/select2/select2.min.js')}}"></script>

<!-- -------------- Typeahead JS -------------- -->
<script src="{{asset('assets/js/plugins/typeahead/typeahead.bundle.min.js')}}"></script>

<!-- -------------- TagManager JS -------------- -->
<script src="{{asset('assets/js/plugins/tagmanager/tagmanager.js')}}"></script>

<!-- -------------- DateRange JS -------------- -->
<script src="{{asset('assets/js/plugins/daterange/daterangepicker.min.js')}}"></script>

<!-- -------------- DateTime JS -------------- -->
<script src="{{asset('assets/js/plugins/datepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- -------------- BS Colorpicker JS -------------- -->
<script src="{{asset('assets/js/plugins/colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

<!-- -------------- MaskedInput JS -------------- -->
<script src="{{asset('assets/js/plugins/jquerymask/jquery.maskedinput.min.js')}}"></script>
@yield('script')
<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
       // Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2.1,
                y: window.innerHeight / 2.2
            },
        });

    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
