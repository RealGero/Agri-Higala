@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="order-detail">
            <div class="row">
                <div class="col-10 mx-auto">
                    <span class="h3">Orders>My order</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-3">
                                <div class="col-12 d-flex flex-column">
                                    <span class="h5"> Order ID: </span>
                                    <span class="h5">Customer Name:</span>
                                    <span class="h5">Adress:</span>
                                </div>
                               
                            </div>
                            <div class="row mt-5 mx-3">
                                <div class="col-12">
                                    <h5 class="card-title font-weight-bold">Products:</h5>
                                </div>
                            </div>
                            <div class="row mx-3">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Unit price</th>
                                            <th scope="col">Unit type</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total price</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td><img src="/images/lansones.jpg" alt=""></td>
                                            <td>Mark</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td><img src="/images/lansones.jpg" alt=""></td>
                                            <td>Mark</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                          </tr>
                                    
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="row mr-5">
                                <div class="col-12 d-flex justify-content-end">
                                    <span>Paid price:</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
