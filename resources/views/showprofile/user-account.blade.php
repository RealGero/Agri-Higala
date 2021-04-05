@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="account-profile">
            <div class="row">
                <div class="col-4 container-fluid">
                    @include('include.leftside_buyer')
                </div>
                <div class="col-4 mx-auto">
                    <h3>User>Account</h3>
                    @if(session()->has('username'))
                        <div class="alert alert-success">
                            {{ session()->get('username') }}
                        </div>
                    @endif
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">Update Username</h5>
                            <div class="row">
                               
                                    <div class="col-12">
                                        <form action="{{ action('UsersController@updateAccountUsername')}}" method="POST">  
                                            @csrf
                                            <div class="text-danger"> {{$errors->first('username')}}</div>
                                            <input class="form-control @error('username') is-invalid @enderror mb-2 form-group" type="text" name="username">
                                            
                                            @method('PUT')
                                           <button class="btn btn-primary d-flex justify-content-center form-group d-block col-12" type="submit"> Save </button>
                                        </form> 
                                    </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{session('error')}}
                                    </div>
                             @endif

                             @if(session()->has('password'))
                                    <div class="alert alert-success">
                                        {{session()->get('password')}}
                                    </div>      
                             @endif
                            <div class="card my-3">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Change password</h5>
                                    <form method="POST" action="{{action('UsersController@updateAccountPassword')}}">
                                     @csrf   
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="inputPassword" name="current_password" placeholder="Old password" autocomplete="current_password">
                                                <div class="text-danger">{{$errors->first('current_password')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="inputPassword" placeholder="New password">
                                                <div class="text-danger">{{$errors->first('new_password')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="inputPassword" name="password_confirmation" placeholder="Confirm password">
                                                <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary d-flex justify-content-center form-group d-block col-12" type="submit"> Save </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card my-3">
                                <div class="card-body ">
                                    <h5 class="card-title">Update valid ID</h5>
                                    <div class="row">      
                                    </div>
                                    @csrf
                                    <div class="row d-flex justify-content-center p-2">
                                        <img src="/storage/buyer/valid-id-front/{{$user->buyer->valid_id_front}}"  alt="valid-id-front">
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <img src="/storage/buyer/valid-id-back/{{$user->buyer->valid_id_back}}"  alt="valid-id-back">
       
                                    </div> 
                               
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#update-valid-id">Upload Photo</button>
                                          </div> 
                                    </div> 
                                    @include('modals.modals')                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection