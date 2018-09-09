@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">data Karyawan</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">


                            </div>
                        </div>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status Order</th>
                                    <th>Total Price</th>
                                    <th>Ubah status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td class="desc">{{$order->user->email}}</td>
                                        <td>{{$order->status == true ? "Active": "Non-active"}}</td>
                                        <td>{{$order->total_price }}</td>
                                        <td>
                                            <div class="table-data-feature">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->


                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.btn-delete').on('click', function (e) {
                console.log('was', $(this).attr('data-content'));
                e.preventDefault();
                let deleteUrl = $(this).attr('data-content');
                swal("Are you sure want to delete this ?", {
                    buttons: {
                        cancel: "No!",
                        catch: {
                            text: "Yes",
                            value: "yes",
                        },
                    },
                }).then((value) => {
                    if(value == "yes") {
                        let form = document.createElement('form');
                        form.setAttribute('method', 'post');
                        form.setAttribute('action', deleteUrl);

                        let csrfField = document.createElement('input');
                        csrfField.setAttribute('type', 'hidden');
                        csrfField.setAttribute('name', '_token');
                        csrfField.setAttribute('value', $('meta[name="csrf-token"]').attr('content'));
                        form.appendChild(csrfField);

                        let methodField = document.createElement('input');
                        methodField.setAttribute('type', 'hidden');
                        methodField.setAttribute('name', '_method');
                        methodField.setAttribute('value', 'DELETE');
                        form.appendChild(methodField);

                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });

    </script>
@endsection