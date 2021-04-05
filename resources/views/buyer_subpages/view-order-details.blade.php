@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="view-order-details">
                <div class="row">
                    <div class="col-10 d-flex justify-content-between mx-auto">
                        <a class="btn btn-primary" href="/buyer/order" role="button">Back</a>
                        <span>Order ID:123566</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <ul class="progressbar d-flex flex-row  justify-content-around">
                            <li class="active">Request</li>
                            <li class="active">Pending</li>
                            <li>Delivery</li>
                            <li>Order completed</li>
                        </ul>
                    </div>
                </div>
        
        </div>
    </div>
    
@endsection

{{-- <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <a class="btn btn-primary" href="#" role="button">Back</a>
                <span>Order ID:123566</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <ul class="progressbar d-flex flex-row  justify-content-around">
                    <li>Request</li>
                    <li>Pending</li>
                    <li>Delivery</li>
                    <li>Order completed</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}