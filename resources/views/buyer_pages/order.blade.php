@extends('layouts.app')


@section('content')
    <div class="container  d-flex justify-content-center">
        <div class="order_view">
            <h2>My orders</h2>
            <div class="row">
                <div class="card order-card" >
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col-2"></th>
                                <th scope="col-2">Name</th>
                                <th scope="col-2">Price</th>
                                <th scope="col-2">Quantity</th>
                                <th scope="col-2">Unit</th>
                                <th scope="col-2">Shipping fee</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="image-container"><img src="/images/lansones.jpg" alt=""></td>
                                {{-- <td>amang</td> --}}
                                <td>Bangus</td>
                                <td>P160</td>
                                <td>1</td>
                                <td>KL</td>
                                <td>P40</td>
                              </tr>     
                            </tbody>
                          </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end">
                                <h6 class="pb-2 pr-3">Order Total: &#8369;200</h6>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around button-size">
                            <div class="col-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelModal">
                                    Cancel
                                  </button>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-primary" href="/buyer/order/return" role="button">Return</a>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-primary" href="/buyer/order/order-view-details" role="button">View order details</a>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#order-receivedModal">
                                    Order received
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
    @include('modals.modals');
@endsection

