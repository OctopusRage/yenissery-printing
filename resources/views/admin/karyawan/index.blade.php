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
                            <div class="table-data__tool-right">
                                <a href="{{route ('karyawan.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                    <i class="zmdi zmdi-plus"></i>tambah karyawan</a>

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
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td class="desc">{{$user->email}}</td>
                                        <td>{{$user->is_active == true ? "Active": "Non-active"}}</td>
                                        <td>{{$user->type == 2 ?  "Karyawan":"Admin"}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{route('karyawan.edit', $user->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                {{--<form method="POST" action="{{route('product.destroy', $product->id)}}">--}}
                                                {{--@csrf--}}
                                                {{--{{ method_field('DELETE') }}--}}
                                                {{--<button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" value="DELETE">--}}
                                                {{--<i class="zmdi zmdi-delete"></i>--}}
                                                {{--</button>--}}
                                                {{--</form>A--}}

                                                <a href="{{route('karyawan.activate', $user->id)}}" class="item " data-toggle="tooltip" data-placement="top" title="" data-original-title="Activate/Deactivate" >
                                                    <i class="zmdi zmdi-power-off"></i>
                                                </a>
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