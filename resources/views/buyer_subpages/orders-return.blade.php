@extends('layouts.app')



@section('content')
    
    <div class="container">
        <div class="container-return">
            <div class="row">
                <div class="col-10 mx-auto">
                    <h4>My Orders>Return</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12"> 
                                    <a class="btn btn-primary" href="/buyer/order" role="button">Back</a>
                                 </div>
                            </div>
                            <div class="row">
                               <div class="col-12">
                                <table class="table table-borderless">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Shipping fee</th>
                                        <th scope="col">Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><img src="/images/lansones.jpg" alt=""> </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                      </tr>
                                    </tbody>
                                  </table>
                               </div>
                            </div>
                            <div class="row border-bottom mx-3">
                                <div class="col-11  d-flex justify-content-end">
                                    <h5 class="font-weight-bold">Order Total: &#8369; 200</h5>
                                </div>
                            </div>
                            <div class="row pt-3 d-flex justify-content-center ">
                                <div class="col-4 ">
                                    <div class="form-group">
                                        <label for="select-option-reuturn" class="font-italic">Please specify the reason of returning</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Defective</option>
                                          <option>Wrong order</option>
                                          <option>Incomplete</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <div class="form-group">
                                        <label for="comment">Comment:</label>
                                        <textarea class="form-control" rows="6" id="comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center  ">
                                <div class="col-6 ">
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