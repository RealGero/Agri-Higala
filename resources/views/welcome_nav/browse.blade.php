@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="browse pb-3">
            <div class="row">
                <div class="col-10 mx-auto ">
                    <h3>Recommended</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-around">
                                <div class="col-2 ">
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                </div>
                                <div class="col-2">
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                </div>
                                <div class="col-2">
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                </div>
                                <div class="col-2">
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                </div>
                                <div class="col-2">
                                    <img src="/images/lansones.jpg" alt="">
                                    <h5>Lansones</h5>
                                    <p> &#8369; 80 per sacks</p>
                                    <p>Brgy.1</p>
                                    <a class="btn btn-success" href="#" role="button">Add to cart</a>
                                </div>
                             </div>
                         </div>
                    </div>
            </div>
        </div>
       
    </div>
    @include('browse_view.browse-products')
    @include('browse_view.dropdowns')
@endsection

{{-- browse product --}}
            {{-- <br>
            <h2>Browse Products</h2>
             @include('browse_view.browse-products')
            @include('browse_view.dropdowns') --}}