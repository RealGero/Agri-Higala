@extends('layouts.seller')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h3>Dashboard</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row mx-3">
                            <div class="col-6">
                                <h4 class="card-title my-2">Available items</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end align-items-center">
                               <a href="/seller/product/my-product"> <i class="fas fa-arrow-alt-circle-right fa-3x text-success"></i></a> 
                            </div>
                        </div>
                        
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">All</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Meat</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Vegetable</span>
                            </div>
                        </div>
        
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Fuits</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Fish</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Others</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Expired</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Discounted</span>
                            </div>
                                
                        </div>

                        <div class="row mx-3 mt-3">
                            <div class="col-6">
                                <h4 class="card-title my-2">Orders</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end align-items-center">
                               <a href="/seller/order/order-request"> <i class="fas fa-arrow-alt-circle-right fa-3x text-success"></i></a> 
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">All</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Request</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Pending</span>
                            </div>
                        </div>
        
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Delivering</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Return request</span>
                            </div>
                            
                        </div>

                        <div class="row mx-3 mt-3">
                            <div class="col-6">
                                <h4 class="card-title my-2">Transaction history</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end align-items-center">
                               <a href="/seller/history"> <i class="fas fa-arrow-alt-circle-right fa-3x text-success"></i></a> 
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">All</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Completed</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Rejected</span>
                            </div>
                        </div>
        
                        <div class="row my-3">
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Cancelled</span>
                            </div>
                            <div class="col-4 text-center">
                                <p>0</p>
                                <span class="h6">Returned</span>
                            </div>
                            
                        </div>       
                </div>
            </div>
        </div>
             
    </div>
    
@endsection