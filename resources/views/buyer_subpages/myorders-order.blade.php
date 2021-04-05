@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="myorders-order">
        <div class="row">
            <div class="col-4 container-fluid">
            @include('include.leftside_buyer')
            </div>
            <div class="col-8">
                <span class="h3">Orders</span>
                <div class="row mt-4 d-flex ">
                    <div class="col-12">
                        <ul class=" d-flex flex-row remove-pad-ul">
                            <li> <a href="">All&nbsp; &nbsp;|</a> </li>
                            <li> <a href="">Request &nbsp; &nbsp;|</a> </li>
                            <li> <a href="">Pending &nbsp; &nbsp;|</a> </li>
                            <li> <a href="">Delivery &nbsp; &nbsp;|</a> </li>
                            <li> <a href="">Recieved</a> </li>
                        </ul>
                    </div>
                </div>     
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-6 d-flex flex-column">
                                <span class="h5">Order#</span>  
                                <span class="h5">Order#</span>  
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span>Total#</span>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                        <td><img src="/images/lansones.jpg" alt=""></td>
                                        <td> Lorem ipsum, dolor sit amet consectetur elit. Nesciunt aliquid dolore veniam?</td> 
                                        <td> Qty 1</td>
                                       <td> Delivered</td>
                                        <td>Delivered on may 26, 2021</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                           
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-6 d-flex flex-column">
                                <span class="h5">Order#</span>  
                                <span class="h5">Order#</span>  
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span>Total#</span>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                        <td><img src="/images/lansones.jpg" alt=""></td>
                                        <td> Lorem ipsum, dolor sit amet consectetur elit. Nesciunt aliquid dolore veniam?</td> 
                                        <td> Qty 1</td>
                                       <td> Delivered</td>
                                        <td>Delivered on may 26, 2021</td>
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