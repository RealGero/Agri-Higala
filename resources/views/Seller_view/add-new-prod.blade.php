@extends('layouts.seller')

@section('content')
    <div class="container">
        <div class="addnewproduct">
           <div class="row">
               <div class="col-8 mx-auto">
                   <span class="h3">Products>Add new products</span>
                   <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary" href="#" role="button">Back</a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Category</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Product name</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Price">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="SRP">
                                </div>
                            </div>
                            <div class="row  mt-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Unit</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Stock">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Barangay">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Expiration date">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <a class="btn btn-primary d-block" href="#" role="button">+Upload Photo</a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control text-justify" id="exampleFormControlTextarea1" rows="3" placeholder="Descreption"></textarea>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary d-block" href="#" role="button">Publish</a>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div> 
        </div>
    </div>
@endsection