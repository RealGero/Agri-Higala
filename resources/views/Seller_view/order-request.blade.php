@extends('layouts.seller');

@section('content')

    <div class="container">
        <div class="myorder">
            <div class="row">
                <div class="col-10 mx-auto">
                    <span class="h3 m-2">Orders> My order</span>
                    <div class="card mt-3">
                        <div class="card-body">
                           <div class="row mt-3">
                               <div class="col-12">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td><a class="btn btn-success btn-sm d-block" href="#" role="button">Accept</a>
                                            <a class="btn btn-danger btn-sm d-block" href="#" role="button">Decline</a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td><select class="form-control form-control-sm">
                                            <option>Delivery Otion</option>
                                            <option>By seller</option>
                                            <option>By System</option>
                                          </select>
                                            <a class="btn btn-primary btn-sm d-block" href="#" role="button">Deliver now</a>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td> <i class="fas fa-check text-primary"> </i> <span class="text-primary"> Shipped</span> 
                                        </td>
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