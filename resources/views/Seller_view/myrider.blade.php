@extends('layouts.seller')

@section('content')
    
    <div class="container">
        <div class="myrider">
            <div class="row">
                <div class="col-8 mx-auto">
                    <span class="h3">My riders</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <a class="btn btn-primary" href="/seller/rider/create" role="button">+ Add rider</a>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Mobile number</th>
                                            <th scope="col"> Image</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                           
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td> <img src="/images/lansones.jpg" alt=""></td>
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