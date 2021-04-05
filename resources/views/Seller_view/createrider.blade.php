@extends('layouts.seller')

@section('content')
    <div class="container">
        <div class="createrider">
            <div class="col-6 mx-auto">
              @if(session()->has('message'))
                          <div class="alert alert-success my-3">
                            {{session()->get('message')}}
                          </div>
                        @endif
                <div class="card p-3">
                    <div class="col-12">
                        
                        <span class="h4 mt-3 d-flex justify-content-center"> Add rider</span>
                        
                        <form action="{{ action('RidersController@store')}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}

                              <div class="row profile-input">
                                <div class="col-12">
                                  <input type="text" class="form-control" placeholder="First name" name="first_name">
                                  <div class="text-danger">{{$errors->first('first_name')}}</div>
                                </div>
                               
                              </div>
                              <div class="row profile-input">
                                <div class="col-12">
                                  <input type="text" class="form-control" placeholder="Middle name" name="middle_name">
                                  <div  class="text-danger">{{$errors->first('middle_name')}}</div>
                                </div>
                                
                              </div>
                              <div class="row profile-input">
                                  <div class="col-12">
                                      <input type="text" class="form-control" placeholder="Last name" name="last_name">
                                      <div class="text-danger">{{$errors->first('last_name')}}</div>
                                    </div>
                                  
                              </div>
                              <div class="row profile-input">
                                  <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Mobile numer" name = "mobile_number">
                                    <div class="text-danger">{{$errors->first('mobile_number')}}</div>
                                  </div>
                                 
                              </div>
                              <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="rider_image">
                                <div class="text-danger">{{$errors->first('rider_image')}}</div>
                              </div>
                              
                             <div class="col-12">
                                <button type="submit" class="btn btn-primary d-block">Submit</button>
                            </div> 
                             
                             
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection