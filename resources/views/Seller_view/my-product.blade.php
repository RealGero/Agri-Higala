@extends('layouts.seller')

@section('content')

    <div class="container">
        <div class="myproduct">
            <div class="row">
                <div class="col-12">
                    <span class="h3">Product>My product</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="input-group rounded">
                                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                        aria-describedby="search-addon" />
                                        <span class="input-group-text border-0" id="search-addon">
                                        <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a class="btn btn-primary mx-3" href="#" role="button">+ Add new product</a>
                                </div> 
                            </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Stock ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Uploaded date</th>
                                    <th scope="col">Expiration date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><img src="/images/lansones.jpg" alt=""></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <td><img src="/images/lansones.jpg" alt=""></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
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
    
@endsection