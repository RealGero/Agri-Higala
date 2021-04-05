@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                <div class="text-danger"> {{$errors->first('email')}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" >
                                <div  class="text-danger">{{$errors->first('first_name')}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Middle name') }}</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" >
                                <div  class="text-danger">{{$errors->first('middle_name')}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}">
                                <div  class="text-danger">{{$errors->first('last_name')}}</div>
                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-group d-flex justify-content-center">
                                <label for="birthday" class="mr-3">Birthday:</label>
                                <input type="date" class="col-md-4  mr-2" id="birthdate" name="birthdate" value="{{old ('birthdate')}}">                      
                                <div class="text-danger"> {{$errors->first('birthdate')}}</div>
                            </div>
                        </div>

                        <div class="col-10 ml-5 gender my-4">                            
                            <label for="gender" class="" id="">Gender:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input ml-3" value="Male" name="gender" checked>Male
                                </label>
                              </div>
                              <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="Female" name="gender" >Female
                                </label>
                                <div class="text-danger"> {{$errors->first('gender')}}</div>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number') }}</label>

                            <div class="col-6">
                                <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}">
                                <div class="text-danger"> {{$errors->first('mobile_number')}}</div>

                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 form-group">
                            <label for="barangays" class="col-md-4 col-form-label text-md-right">{{__('Choose a Barangay:')}}</label>
                            <select name="brgy" id="brgy" class="form-control  @error('brgy') is-invalid @enderror">
                                @foreach($brgys as $brgy)
                                    <option value="{{$brgy->brgy_id}}" {{$brgy->brgy_id=='1' ? 'selected' : ''}}> {{$brgy->brgy_name}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger"> {{$errors->first('brgy')}}</div>
                        </div>
      
                       

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
                                <div class="text-danger"> {{$errors->first('address')}}</div>

                            </div>
                        </div>                
                       
                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
     
                        <div class="form-group row mb-0 d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
