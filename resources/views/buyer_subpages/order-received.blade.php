@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="order-received">
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary" href="#" role="button">back</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col"> </th>
                                            <th scope="col">Name </th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Shipping fee</th>
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
                            <div class="row  px-4">                                
                                <div class="col-12 d-flex justify-content-end border-bottom">
                                    <h6 class="pb-2">Order Total: &#8369;200</h6>
                                 </div>
                            </div>
                            <div class="row py-2 ">
                                <div class="col-12 d-flex justify-content-center">
                                    <h5>Ratings</h5>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 d-flex justify-content-center mx-auto border-bottom  pb-3">
                                    <i class="far fa-star fa-2x px-2"></i>
                                    <i class="far fa-star fa-2x px-2"></i>
                                    <i class="far fa-star fa-2x px-2"></i>
                                    <i class="far fa-star fa-2x px-2"></i>
                                    <i class="far fa-star fa-2x px-2"></i>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-5 mx-auto">
                                    <div class="form-group">
                                        <label for="Comment">Comment:</label>
                                        <textarea class="form-control rounded" id="Comment" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 mx-auto  d-flex justify-content-center">
                                    <a class="btn btn-primary btn-block" href="#" role="button">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
        
@endsection