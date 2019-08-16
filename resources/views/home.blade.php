@extends('layouts.master')
@section('title')
Home
@stop
@section('css')
    <!-- This page CSS -->
    <link href="{{asset('assets/libs/morris.js/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
@endsection
@section('atas')
<div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Home</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#" class="breadcrumb">Home</a>

            </div>
        </div>
    </div>
@endsection
@section('content')

<div class="col l3 m6 s12">
        <div class="card">
            <div class="card-content center-align">
                <div>
                <span class="blue-text display-6"><a href=""><img src="{{asset('icon/task.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                </div>
                <div>
                    <h6 class="blue-text font-medium m-b-0">Day to Day Task</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col l3 m6 s12">
        <div class="card">
            <div class="card-content center-align">
                <div>
                    <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/arsip.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                </div>
                <div>

                    <h6 class="cyan-text font-medium m-b-0">Archive Solution</h6>
                </div>
            </div>
        </div>
    </div>

        <div class="col l3 m6 s12">
                <div class="card">
                    <div class="card-content center-align">
                        <div>
                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/know.svg')}}" alt="" width="80" height="70" class="faa faa-shake animated"></a></span>
                        </div>
                        <div>

                            <h6 class="dark-text font-medium m-b-0">Know-how Resource</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 m6 s12">
                    <div class="card">
                        <div class="card-content center-align">
                            <div>
                                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/sim.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                            </div>
                            <div>

                                <h6 class="green-text font-medium m-b-0">Paperwork Simulation</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-content center-align">
                                <div>
                                    <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/akunting.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                </div>
                                <div>

                                    <h6 class="pink-text font-medium m-b-0">Accounting Assistance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                            <div class="card">
                                <div class="card-content center-align">
                                    <div>
                                        <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/legal.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                    </div>
                                    <div>

                                        <h6 class="cyan-text font-medium m-b-0">Digital Endorsement</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l3 m6 s12">
                                <div class="card">
                                    <div class="card-content center-align">
                                        <div>
                                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/tax.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                        </div>
                                        <div>

                                            <h6 class="cyan-text font-medium m-b-0">Taxation Care</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l3 m6 s12">
                                    <div class="card">
                                        <div class="card-content center-align">
                                            <div>
                                                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/klien.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                            </div>
                                            <div>

                                                <h6 class="blue-text font-medium m-b-0">Client & Expiration Alert</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l3 m6 s12">
                                        <div class="card">
                                            <div class="card-content center-align">
                                                <div>
                                                    <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/email.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                </div>
                                                <div>

                                                    <h6 class="dark-text font-medium m-b-0">Privilege Email</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l3 m6 s12">
                                            <div class="card">
                                                <div class="card-content center-align">
                                                    <div>
                                                        <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/vc.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                    </div>
                                                    <div>

                                                        <h6 class="cyan-text font-medium m-b-0">Audiovisual Canal</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l3 m6 s12">
                                                <div class="card">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/job.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                        </div>
                                                        <div>

                                                            <h6 class="cyan-text font-medium m-b-0">Job Tracker</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col l3 m6 s12">
                                                    <div class="card">
                                                        <div class="card-content center-align">
                                                            <div>
                                                                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/report.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                            </div>
                                                            <div>

                                                                <h6 class="cyan-text font-medium m-b-0">Report Submission</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col l3 m6 s12">
                                                        <div class="card">
                                                            <div class="card-content center-align">
                                                                <div>
                                                                    <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/link.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                </div>
                                                                <div>

                                                                    <h6 class="cyan-text font-medium m-b-0">Licensure Connect</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col l3 m6 s12">
                                                            <div class="card">
                                                                <div class="card-content center-align">
                                                                    <div>
                                                                        <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/hr.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                    </div>
                                                                    <div>

                                                                        <h6 class="cyan-text font-medium m-b-0">HR</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col l3 m6 s12">
                                                                <div class="card">
                                                                    <div class="card-content center-align">
                                                                        <div>
                                                                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/billing.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                        </div>
                                                                        <div>

                                                                            <h6 class="cyan-text font-medium m-b-0">Billing & Payment Gate</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col l3 m6 s12">
                                                                    <div class="card">
                                                                        <div class="card-content center-align">
                                                                            <div>
                                                                                <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/date.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                            </div>
                                                                            <div>

                                                                                <h6 class="cyan-text font-medium m-b-0">Datebook Organizer</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col l3 m6 s12">
                                                                        <div class="card">
                                                                            <div class="card-content center-align">
                                                                                <div>
                                                                                    <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/data.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                                </div>
                                                                                <div>

                                                                                    <h6 class="cyan-text font-medium m-b-0">Database Protocol </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col l3 m6 s12">
                                                                            <div class="card">
                                                                                <div class="card-content center-align">
                                                                                    <div>
                                                                                        <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/uang.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                                    </div>
                                                                                    <div>

                                                                                        <h6 class="cyan-text font-medium m-b-0">Wealth Record</h6>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col l3 m6 s12">
                                                                                <div class="card">
                                                                                    <div class="card-content center-align">
                                                                                        <div>
                                                                                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/zakat.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                                        </div>
                                                                                        <div>

                                                                                            <h6 class="cyan-text font-medium m-b-0">Zakat Allowance</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col l3 m6 s12">
                                                                                <div class="card">
                                                                                    <div class="card-content center-align">
                                                                                        <div>
                                                                                            <span class="cyan-text display-6"><a href=""><img src="{{asset('icon/haj.png')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                                        </div>
                                                                                        <div>

                                                                                            <h6 class="cyan-text font-medium m-b-0">Hajj & Voyage Arrangement</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col l3 m6 s12">
                                                                                <div class="card">
                                                                                    <div class="card-content center-align">
                                                                                        <div>
                                                                                            <span class="cyan-text display-6"><a href="/settings"><img src="{{asset('icon/set.svg')}}" alt="" width="80" height="70" class="faa faa-pulse animated"></a></span>
                                                                                        </div>
                                                                                        <div>

                                                                                            <h6 class="cyan-text font-medium m-b-0">Settings</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>




@endsection
@section('js')
<script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboards/dashboard5.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
 <!--Morris JavaScript -->
<script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/libs/morris.js/morris.min.js')}}"></script>
@endsection
