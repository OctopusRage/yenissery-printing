@extends('landing.index')

@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Pesanan</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Pelanggan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row bar mb-0">
                <div id="customer-orders" class="col-md-9">
                    <p class="text-muted lead">Data Pemesanan Pelanggan</p>
                    <div class="box mt-0 mb-lg-0">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID Pesan</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-info">Being prepared</span></td>
                                    <td><a href="#" class="btn btn-template-outlined btn-sm">View</a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
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