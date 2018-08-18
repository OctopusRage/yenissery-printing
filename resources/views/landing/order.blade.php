@extends('landing.index')

@section('content')
<div id="content">
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
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box border-bottom-0">
                <form method="post" enctype="multipart/form-data" action="{{route('landing.order.create')}}">
                 @csrf
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="firstname">Deskripsi Pesanan</label>
                          <input id="firstname" type="text" class="form-control" name="description">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="lastname">File Pesanan</label>
                          <input id="lastname" type="file" class="form-control" name="file_attachment">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="company">Permintaan Tanggal Jadi</label>
                          <input id="company" type="text" class="form-control" name="finished_at_request">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="street">Jumlah</label>
                          <input id="street" type="text" class="form-control" name="quantity">
                        </div>
                      </div>


                      <div class="col-sm-6">
                            <div class="form-group">
                                <label for="state">Produk</label>
                                <select id="state" class="form-control" name="product_id">
                                    @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                   
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                   
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main">Pesan<i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Nama Produk</td>
                        <th>{{ !empty($orderedProduct) ? $orderedProduct->productsWithDetails()->first()->name : ""}}</th>
                      </tr>
                      <tr>
                        <td>Jumlah Pesan</td>
                        <th>{{ !empty($orderedProduct) ? $orderedProduct->productsWithDetails()->first()->pivot->quantity : ""}}</th>
                      </tr>
                      <tr class="total">
                        <td>Total Bayar</td>
                        <th>{{ !empty($orderedProduct) ? $orderedProduct->total_price : ""}}</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection