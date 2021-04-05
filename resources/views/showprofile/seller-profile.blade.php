@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="showseller mt-4 d-flex justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <a class="btn btn-primary" href="#" role="button">Back</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <h3>Seller Profile</h3>
                            </div>
                        </div>
                        <div class="row mx-3">
                            <div class="col-12 d-flex justify-content-center profile">
                               <img src="/images/lansones.jpg" class="rounded-circle" alt="profile">
                            </div>
                        </div>
                        <div class="row my-3 follow-chat">
                            <div class="col-12  d-flex justify-content-center">
                                <a class="btn btn-primary mr-3" href="#" role="button">Follow</a>
                                <a class="btn btn-primary" href="#" role="button">Chat</a>
                            </div>
                        </div>
                        <div class="row d-flex  justify-content-center my-3 mx-4 border-bottom">
                            <div class="col-4 ">
                                <h6><span class="font-weight-bold"> Suppplier name:</span> </h6>
                                <h6><span class="font-weight-bold">Location:</span> </h6>
                                <h6><span class="font-weight-bold">  Scheduled online time:</span></h6>
                                
                            </div>
                            <div class="col-3 ">
                                <h6><span class="font-weight-bold"> Sold items:</span> </h6>
                                <h6><span class="font-weight-bold">Ratings:</span> </h6>
                            </div>
                        </div>
                        <div class="row display-product m-3 pt-3">
                            <div class="col-3  text-center" >
                                
                                <img src="/images/lansones.jpg" alt="">         
                                <h5>Lansones</h5>
                                <p> &#8369; 80 per sacks</p>
                                <p>Brgy.1</p>
                                <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                            <div class="col-3 text-center">
                               
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                            <div class="col-3 text-center">
                               
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                            <div class="col-3 text-center">
                               
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                            
                        </div>

                        {{-- other row --}}

                        <div class="row display-product m-3 pt-5">
                            <div class="col-3 text-center">
                                <img src="/images/lansones.jpg" alt="">
                                <h5>Lansones</h5>
                                <p> &#8369; 80 per sacks</p>
                                <p>Brgy.1</p>
                                <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                            <div class="col-3 text-center">
                             
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                
                            </div>
                            <div class="col-3 text-center">
                                
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                               
                            </div>
                            <div class="col-3 text-center">
                                
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                            </div>
                        </div>
                        
                        <h5 class="mt-5 ml-5">Ratings and Reviews</h5>
                            <div class="card card-reviews mx-auto p-4 ">
                                <div class="row">
                                    <div class="col-12 p-3">
                                        <img src="/images/lansones.jpg" class="rounded-circle m-1" alt="">
                                        <p class="d-inline p-2">John Doe</p>
                                        <div class="d-block p-2">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum officiis quis voluptate quisquam nesciunt incidunt cum, architecto tempora nemo fugit.</p>
                                    </div>
                                </div>
                                <div class="row mb-4 border-bottom">
                                    <div class="col-12">
                                        <p>Date: Time:</p>
                                    
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <img src="/images/lansones.jpg" class="rounded-circle" alt="">
                                        <p class="d-inline p-2">John Doe</p>
                                        <div class="d-block p-2">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum officiis quis voluptate quisquam nesciunt incidunt cum, architecto tempora nemo fugit.</p>
                                    </div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-12">
                                        <p>Date: Time:</p>
                                    
                                    </div>
                                </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
