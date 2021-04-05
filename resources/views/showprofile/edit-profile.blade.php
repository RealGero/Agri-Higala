@extends('layouts.app')

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
                        <input type="text" class="form-control" placeholder="First name" name="firstname" value="1" autocomplete="off">
                      </div>
                    </div>
                    <div class="row profile-input">
                      <div class="col-12">
                        <input type="text" class="form-control" placeholder="Last name" name="lastname">
                      </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Street" name="street">
                        </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-12">
                        <input type="text" class="form-control" placeholder="Barangay" name = "barangay">
                        </div>
                    </div>
                    
                    <div class="row profile-input">
                        <div class="col-12">
                            <input class="form-control" name="birthdate" placeholder="Birthdate(mm/dd/yyyy)" type="text"  id="example-date-input" onfocus="(this.type='date')">
                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center gender_choice">
                            
                            <label for="gender" class="d-flex align-items-center" id="gender-label">Gender</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="male">Male
                                </label>
                              </div>
                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="female">Female
                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-12">   <input type="email" class="form-control" placeholder="Email" name="email"> </div>
                    </div>
                    <div class="row profile-input">
                      <div class="col-12">

                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        Add photo
                      </div>
                      <div class="card-body">
                        <input type="file" name="image">
                      </div>
                    </div>

                    <div class="row profile-input">
                        <div class="col-12 d-flex flex-column">
                            <button type="button" class="btn btn-success">Create</button>
                            
                        </div>
                    </div>   
            
                  </form>
            </div>     
          </div>   
        </div>
      </div>
    </div>
    
@endsection