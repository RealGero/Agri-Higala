@extends('layouts.app')


@section('content')
    
    <div class="container">
        <div class="product-detail d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <a href="" class="btn btn-success mb-3" >Back</a> 
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mb-3">
                            <img src="/images/lansones.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><span class="font-weight-bold">Product Name:</span> </li>
                                <li><span class="font-weight-bold"> Location:</span></li>
                                <li><span class="font-weight-bold"> Price</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>

                                <li><span class="font-weight-bold"> Stock:</span></li>
                                <li><span class="font-weight-bold">Unit Type:</span></li>
                                <li><span class="font-weight-bold">Date Added:</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  border-bottom d-flex justify-content-center">
                           <a href="#" class="btn btn-success mb-3">Add to Cart</a>  
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <i class="fas fa-user-circle fa-3x d-flex justify-content-center my-3"></i>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-8">
                            Supplier Name:
                        </div>
                        <div class="col-4 product-detail-btn">
                            <a href="#" class="btn btn-success btn-md">Follow</a>  
                            <a href="#" class="btn btn-success btn-md">Chat</a>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            Google Map
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection