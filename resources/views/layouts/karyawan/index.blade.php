@extends('layouts.master')
@section('title','Data Karyawan')
@section('main-content')
<div class="breadcrumb">
    <h1>Data Karyawan</h1>
    <ul>
        <li><a href="">Dashboard</a></li>
        <li>Data Karyawan</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<div class="row mb-4">
    <div class="col-sm-10 mr-5">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Find Data By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                <a class="dropdown-item" href="{{route('datakaryawan')}}">All Data Karyawan</a>
                <a class="dropdown-item" href="#">Top 3</a>
                <a class="dropdown-item" href="#">Data Karyawan Mengambil Cuti</a>
                <a class="dropdown-item" href="#">Data Sisa Cuti</a>
            </div>
        </div>
    </div>
    <button class="btn btn-outline-primary"><a href="{{route('add_data_karyawan')}}">Add Data</a> </button>


</div>

<div class="row mb-4">


    <div class="col mb-3">
        <div class="card text-left">

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Induk</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tanggal Bergabung</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $data )
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data['nomor_induk']}}</td>
                                <td>{{$data['nama']}}</td>
                                <td>{{$data['alamat']}}</td>
                                <td>{{$data->formatDate('tanggal_lahir')}}</td>
                                <td>{{$data->formatDate('tanggal_bergabung')}}</td>
                                <td>
                                    <a href="#" class="text-success mr-2">
                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                    </a>
                                    <a href="#" class="text-danger mr-2">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- end of col-->
</div>


@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
