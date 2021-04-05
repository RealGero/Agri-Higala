@extends('layouts.seller')


@section('content')
    <div class="container">
        <div class="account-profile">
            <div class="row">
                <div class="col-4 mx-auto">
                    <h3>User>Account</h3>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Username</h5>
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control mb-2" type="text" placeholder="Default input">
                                    <a class="btn btn-primary d-flex justify-content-center" href="#" role="button">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change password</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Old password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control" id="inputPassword" placeholder="New password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">       
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="btn btn-primary d-flex justify-content-center"href="#" role="button">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection