@extends('layouts.seller')

@section('content')

    <div class="container edit-profile">
      <div class="row">
        <div class="col-4 mx-auto">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Profile</h2>
                <form action="/profile" method="POST">
                  @csrf
                    <div class="row">
                      <div class="col-4 ">
                        <img src="/images/lansones.jpg" class="rounded-circle mx-auto" alt="profile-pic">
                        <a class="btn btn-primary btn-sm btn-block upload-photo-btn"  href="#" role="button">Upload photo</a>
                      </div>
                      <div class="col-8 mt-3">
                        <h4 class="font-weight-bold">John Doe</h4> 
                        <h6>Joined March,16 2020</h6>
                      </div>
                    </div>
                   
                    <div class="row profile-input">
                      <div class="col-12">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="row profile-input">
                      <div class="col-12">
                        <input type="text" class="form-control" placeholder="Mobile number" name="mobile number">
                      </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Sitio/Purok/Zone" name = "sitio">
                        </div>
                    </div>

                    <div class="row profile-input">
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Barangay" name = "barangay">
                        </div>
                    </div>

                    <div class="row profile-input">
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Scheduled online time" name = "schedule">
                        </div>
                    </div> 
                    <div class="form-group">
                       
                        <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                   

                    <div class="row profile-input">
                        <div class="col-12 d-flex flex-column">
                            <button type="button" class="btn btn-success">Save</button>
                            
                        </div>
                    </div>   
            
                  </form>
            </div>     
          </div>   
        </div>
      </div>
    </div>
    
@endsection