@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <h1>Version 1</h1>
    <ul>
        <li><a href="">Dashboard</a></li>
        <li>Version 1</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>





@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
