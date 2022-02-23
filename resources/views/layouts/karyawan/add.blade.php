@extends('layouts.master')
@section('title','Data Karyawan')
@section('main-content')
<div class="breadcrumb">
    <h1>Add Data Karyawan</h1>
    <ul>
        <li><a href="">Dashboard</a></li>
        <li>Add Data Karyawan</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-md-8">

        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{route('store_karyawan')}}" novalidate>
                    @csrf
                    <div class="form-row">
                        <!-- <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nomer Induk</label>
                            <input type="text" name="noinduk" class="form-control" id="validationCustom01" value="{{old('noinduk')}}" placeholder="Nomer Induk" required>
                            <div class="valid-feedback">
                                Nomer Induk Valid!
                            </div>
                        </div> -->
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Nama</label>
                            <input type="text" class="form-control" id="validationCustom02" value="{{old('nama')}}" name="nama" placeholder="Nama" required>
                            <div class="valid-feedback">
                                Nama Valid!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Alamat</label>
                            <div class="input-group">

                                <input type="text" class="form-control" id="validationCustomUsername" value="{{old('alamat')}}" placeholder="Alamat" aria-describedby="inputGroupPrepend" name="alamat" required>
                                <div class="invalid-feedback">
                                    Mohon masukkan alamat.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="picker3">Tanggal Lahir</label>
                            <div class="input-group">
                                <input id="picker3" class="form-control" placeholder="yyyy-mm-dd" value="{{old('tanggal_lahir')}}" required name="tanggal_lahir">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="icon-regular i-Calendar-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="picker3">Tanggal Bergabung</label>
                            <div class="input-group">
                                <input id="picker3" class="form-control" placeholder="yyyy-mm-dd" value="{{old('tanggal_bergabung')}}" required name="tanggal_bergabung">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="icon-regular i-Calendar-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection

@section('page-js')

<script src="{{asset('assets/js/form.validation.script.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>

@endsection
