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
                            <strong>Tambah Data Produk</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_method" value="PATCH">

                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" value="{{$product->name}}" placeholder="Nama Produk" class="form-control">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Deskripsi Produk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="description" rows="9" placeholder="Deskripsi" class="form-control">{{$product->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input"  class=" form-control-label">Harga</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="price" value="{{$product->price}}" name="price" placeholder="Harga" class="form-control">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gambar Produk</label>
                                    </div>
                                    <div class="col-12 col-md-5 photo-wrapper" >
                                        <input type="file" multiple name="photos[]" class="form-control-file">
                                    </div>
                                    {{--<div class="col-12 col-md-4">--}}
                                    {{--<button type="button" id="add-pict"class="btn btn-primary btn-sm">--}}
                                    {{--<i class="fa fa-upload"></i> Tambah Gambar--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                </div>

                                <div class="row form-group">


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