@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="checkout">
            <div class="row pb-3">
                <div class="col-12">
                    <h2>Cart>Checkout</h2> 
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h5 class="card-title"><i class="fas fa-map-marker-alt"> </i> Delivery Address</h5>             
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                John Doe 
                                </div>
                                <div class="col-3">
                                    1234567890 
                                </div>
                                <div class="col-3">
                                    Lumbia,Cdo 
                                </div>
                                <div class="col-3">
                                    <a href="" class="btn btn-primary">Change></a> 
                                </div>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Products Ordered</h5>
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-store"></i>
                                    Name of store &nbsp; | &nbsp;
                                    <i class="far fa-comment"></i>
                                    Chat Now
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="/images/lansones.jpg" alt=""></td>
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
            <div class="row">
                <div class="col-10">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <ul> 
                                        <h5 class="pb-3">  Payment Method </h5>
                                        <li class="pb-2"><span class="font-weight-bold mb-5">Subtotal:</span></li>
                                        <li class="pb-2"><span class="font-weight-bold">Shipping total:</span></li>
                                        <li class="pb-2"><span class="font-weight-bold">Total Payment:</span></li>
                                        <li> <span class="font-weight-bold" >Phone Number:</span>  <input type="text" class="rounded" min="11"></li>
                                    </ul>
                                </div>
                                <div class="col-6 button-payment">
                                    <a href="" class="btn btn-primary btn-sm">Gcash</a>
                                    <a href="" class="btn btn-primary btn-sm">Cash on Delivery</a>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" class="btn btn-primary btn-sm checkout-btn ">Checkout</a>
                                        </div>
                                    </div>
                                        
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


@endsection