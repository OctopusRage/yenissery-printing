@extends('landing.index')

@section('content')
<div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box border-bottom-0">
                <form method="post" action="{{route('landing.order.create')}}">
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
                <p class="text-muted text-small">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th>$446.00</th>
                      </tr>
                      <tr>
                        <td>Shipping and handling</td>
                        <th>$10.00</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>$0.00</th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th>$456.00</th>
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