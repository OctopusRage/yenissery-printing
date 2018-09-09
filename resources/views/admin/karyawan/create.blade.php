@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            @if(session('error'))
                                <li>{{session('error')}}</li>
                            @endif
                        </ul>
                    </div>
                @endif
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Data Karyawan</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('karyawan.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama Karyawan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" value="{{old('name')}}" name="name" placeholder="Nama Produk" class="form-control">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="" value="{{old('email')}}" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="type"  class="form-control">
                                            <option value="2">Karyawan</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" value="{{old('password')}}" name="password" placeholder="Password" class="form-control">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Password Confirmation</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password"  value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


                <div class="row">
                </div>
            </div>
        </div>
    </div>


    @endsection


{{--@section('script')--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$("#add-pict").click(function (e) {--}}
                {{--$(".photo-wrapper").append(`--}}
                    {{--<input type="file" name="photos[]" class="form-control-file">--}}
                {{--`);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}