@extends('layouts.app')


@section('content')

    <div class="container profile ">
      <div class="row">
        <div class="col-4">
          @include('include.leftside_buyer')
        </div>
        <div class="col-5">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
          @endif
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-center">Profile</h2>

                <form action="{{action('UsersController@update')}}" method="POST">
                  @csrf
                  
                  <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                      <img src="/storage/user/{{$user->user_image}}" class="rounded-circle" alt="profile-pic">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 mt-3 d-flex flex-column align-items-center ">
                        <h5 class="font-weight-bold mr-4 text-capitalize">{{$user->f_name .' '. $user->l_name}}</h5> 
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12 d-flex justify-content-center">
                        <h6>Joined on {{date('M Y', strtotime($user->created_at))}}</h6>
                      </div>
                    </div>
                    
                      {{-- <h6>{{Carbon\Carbon::createFromTimestamp($user->created_at)->format('d-m-Y')}}</h6> --}}
                    <div class="row">
                        <div class="col-12">

                          <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#add-profile-pic">Upload Photo</button>
                          {{-- <a class="btn btn-primary btn-sm btn-block
                          "  href="#" role="button">Upload photo</a> --}}
                         
                        </div> 
                    </div>
                     
                    
                  </div>
                    <div class="row profile-input">
                      <div class="col-11 mx-auto">
                        <input type="text" class="form-control @error('fist_name') is-invalid @enderror" placeholder="First name" name="first_name" value="{{$user->f_name}}">
                        <div class="text-danger">{{$errors->first('first_name')}}</div>
                      </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-11 mx-auto">
                          <input type="text" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Middle name" name="middle_name"  value="{{$user->m_name}}">
                          <div class="text-danger">{{$errors->first('middle_name')}}</div>
                        </div>
                      </div>
                    <div class="row profile-input">
                      <div class="col-11 mx-auto">
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last name" name="last_name" value="{{$user->l_name}}">
                        <div class="text-danger">{{$errors->first('last_name')}}</div>
                      </div>
                    </div>
                    
                    <div class="row profile-input">
                      <div class="col-11 mx-auto">
                          <input class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" placeholder="Birthdate(mm/dd/yyyy)" type="text" value="{{$user->buyer->birthdate}}" id="example-date-input" onfocus="(this.type='date')">
                          <div class="text-danger">{{$errors->first('birthdate')}}</div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-12 d-flex justify-content-center gender_choice">
                        
                        <label for="gender" class="d-flex align-items-center" id="gender-label">Gender</label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input form-control @error('gender') is-invalid @enderror" name="gender" value = "Male" {{$buyer->gender=='Male' ? 'checked' : ''}}>Male
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input form-control @error('gender') is-invalid @enderror" name="gender" value="Female" {{$buyer->gender=='Female' ? 'checked' : ''}}>Female
                            </label>
                            <div class="text-danger">{{$errors->first('gender')}}</div>  
                          </div>
                    </div>
                </div>

                    <div class="row profile-input">
                        <div class="col-11 mx-auto">
                            <input type="text" class="form-control  @error('mobile_number') is-invalid @enderror" placeholder="Mobile number" name="mobile_number" value="{{$user->mobile_number}}">
                            <div class="text-danger">{{$errors->first('mobile_number')}}</div>  
                          </div>
                    </div>
                    <div class="row profile-input">
                        <div class="col-11 mx-auto">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$user->email}}">
                            <div class="text-danger">{{$errors->first('email')}}</div>  
                          </div>
                    </div>

               
                   
                    <div class="row profile-input">
                      <div class="col-12">
  
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-11 mx-auto">
                            <label for="barangays">Choose a barangay:</label>
                            <select name="brgy" id="brgy " class="form-control @error('brgy') is-invalid @enderror">
                                @foreach($brgys as $brgy)
                                    <option value="{{$brgy->brgy_id}}" {{$buyer->brgy_id==$brgy->brgy_id ? 'selected' : ''}}> {{$brgy->brgy_name}}</option>

                                @endforeach
                            </select>
                            <div class="text-danger">{{$errors->first('brgy')}}</div>  
                          </div>
                    </div>
                   
                    <div class="row profile-input">
                      <div class="col-11 mx-auto">   <input type="text" class="form-control form-control @error('address ') is-invalid @enderror" placeholder="Address" name="address" value="{{$user->buyer->address}}"> </div>
                      <div class="text-danger">{{$errors->first('address')}}</div>  
                    </div>


                    {{-- <div class="card col-11 mx-auto">
                      <div class="card-header">
                        Add Profile
                      </div>
                      <div class="card-body">
                        <input type="file" name="buyer_image">
                      </div>
                    </div>
                     --}}
                    @method('PUT')
                    <div class="row profile-input">
                        <div class="col-11 mx-auto d-flex flex-column">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>   
                  </form>
                  @include('modals.modals')
            </div>     
          </div>   
        </div>
      </div>
      
    </div>
    
@endsection

