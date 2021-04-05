@extends('layouts.app')

@section('content')
    

    <div class="container ">
        <div class="cart ">
            <div class="row">
                <div class="col-8 mx-auto">
                    <h2>Cart</h2>
                    <div class="card" style="">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total price</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
                                      </div>
                                    </td>
                                    <td> <img src="/images/lansones.jpg" alt=""> </td>
                                    <td>Lansones</td>
                                    <td> &#8369;20/kl</td>
                                    <td><input type="number" class="cart-quantity" min="0"></td>
                                    <td>&#8369;20</td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 d-flex justify-content-end mt-4">
                   <a href="" class="btn btn-primary">Place order</button></a>
                </div>
            </div>
        </div>


    </div>
@endsection