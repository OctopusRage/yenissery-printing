@extends('landing.index')

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Akun Saya</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Akun Saya</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row bar">
                <div id="customer-account" class="col-lg-9 clearfix">
                    <p class="lead">Ganti data akun anda disini</p>


                    <div class="bo3">
                        <div class="heading">
                            <h3 class="text-uppercase">Detail Akun</h3>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Nama</label>
                                        <input id="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email</label>
                                        <input id="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">No Telepon</label>
                                        <input id="company" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Save changes</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <!-- CUSTOMER MENU -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Menu Pelanggan</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-user"></i> Akun Saya</a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-list"></i>Data Pesan</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection