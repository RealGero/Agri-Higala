@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="transaction-history">
            <div class="row">
                <div class="col-8 mx-auto">
                    <span class="h3">Order transaction history</span>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total price</th>
                                            <th scope="col">Date</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
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