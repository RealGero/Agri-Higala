@extends('layouts.app')

@section('content')
    
    <div class="container d-flex justify-content-center pb-4">
        <div class="verfication ">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center ">Verification</h5>
                    <div class="row">
                        <div class="col-12 ">                
                            <form class="pb-3 d-flex flex flex-column">
                                <div class="form-group  ">
                                <input type="text" class="form-control"  placeholder="Enter Phone Number">
                                </div>
                                <button type="button" class="btn btn-success  ">Next</button>
                            </form> 
                            
                            <form action="" class="d-flex flex flex-column">

                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Verification code">
                                    </div>
                                    <button type="button" class="btn btn-success">Next</button>
                            </form>
                        </div>
                    </div>  
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
    </div>

@endsection





                     
    {{-- <form>
        <div class="form-group">
          <label for="phonenumber">Phone Number</label>
          <input type="text" class="form-control"  placeholder="Enter Phone Number">
        </div>
        <button type="button" class="btn btn-success">Success</button>
    </form>    
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> --}}
