@extends('layouts.seller')


@section('content')
    <div class="container">
        <div class="order-detail">
            <div class="row">
                <div class="col-10 mx-auto">
                    <span class="h3">Orders>My order</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-3">
                                <div class="col-6">
                                    <span class="h5"> <p>Order ID:</p> </span>
                                    <span class="h5">Buyer Name:</span>
                                </div>
                                <div class="col-6  d-flex align-items-center">
                                    <div class="border rounded p-3">Status: 
                                        <a class="btn btn-success" href="#" role="button">Accept</a>
                                        <a class="btn btn-danger" href="#" role="button">Reject</a>
                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
