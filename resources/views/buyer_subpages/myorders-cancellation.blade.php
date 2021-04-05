@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="myorders-cancellation">
            <div class="row">
                <div class="col-10 mx-auto">
                    <span class="h3">Returns</span>    
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="row border-bottom">
                                <div class="col-6 d-flex flex-column">
                                    <span class="h5">Order#</span>  
                                    <span class="h5">Order on</span>  
                                    <span class="h5">Received on</span>  
                                   
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center">
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
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                            <td><img src="/images/lansones.jpg" alt=""></td>
                                            <td> Lorem ipsum, dolor sit amet consectetur elit. Nesciunt aliquid dolore veniam?</td> 
                                            <td> Qty 1</td>
                                           <td> Delivered</td>
                                            
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
