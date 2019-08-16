@extends('layouts.master')
@section('css')

@endsection

@section('title')
    Day To Day Task
@endsection
@section('atas')
<header id="topbar" class="affix alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="dashboard1.html">
                        <span class="fa fa-cogs"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="">Task</a>
                </li>


            </ol>
        </div>
        <div class="topbar-right">
        </div>
    </header>
@endsection
@section('content')
<section id="content" class="animated fadeIn">

        <div class="topbar-menu row">
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-danger faa-parent faa-horizontal animated">
                    <span class="icon icon-key"></span>
                    <span class="service-title">Permission</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-success faa-parent faa-pulse animated">
                    <span class="icon icon-admin"></span>
                    <span class="service-title">Roles</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-primary">
                    <span class="fa fa-video-camera"></span>
                    <span class="service-title">General</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-alert">
                    <span class="fa fa-envelope"></span>
                    <span class="service-title">System</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-system">
                    <span class="fa fa-cog"></span>
                    <span class="service-title">Payment</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-dark">
                    <span class="fa fa-user"></span>
                    <span class="service-title">Invoice</span>
                </a>
            </div>

            </div>

    </section>
@endsection
@section('js')

@endsection
@section('script')

@endsection
