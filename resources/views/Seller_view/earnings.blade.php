@extends('layouts.seller')

@section('content')
    
    <div class="container">
        <div class="earnings">
            <div class="row">
                <div class="col-10">
                    <span class="h3">Earnings</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                       
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <form action="/action_page.php">
                                        <input type="date" id="birthday" name="birthday">      
                                      </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                          <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Buyer Name</th>
                                            <th scope="col">Date completed</th>
                                            <th scope="col">Earnings</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            
                                            <td>Mark</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                          
                                            <td>Jacob</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                         
                                        </tbody>

                                      </table>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-11 d-flex justify-content-end">
                                    <span>Total:&#8369; 2,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection