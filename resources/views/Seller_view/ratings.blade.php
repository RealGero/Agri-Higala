@extends('layouts.seller')

@section('content')
    <div class="container">
        <div class="ratings">
            <div class="row">
                <div class="col-10 mx-auto">
                    <span class="h3">Ratings</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col-12 text-center">
                                    <span class="border p-2 rounded">Ratings 3.5/5 <i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="row border-top mx-3 mt-5">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Buyer Name</th>
                                            <th scope="col">Ratings</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Comments</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, explicabo. <a class="btn btn-primary d-block" href="#" role="button">Link</a></p>
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