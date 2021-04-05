@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label> --}}

                            <div class="col-md-6 mx-auto">
                                <input id="username" placeholder="Username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6 mx-auto">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-6 mx-auto mt-1">
                               <hr>
                           </div>
                        </div>
                        
                        <div class="row mt-1 mb-2 ">
                            <div class="col-12 d-flex justify-content-center ">
                                
                                <a href="" class=" text-decoration:none mr-2 text-dark border"> <i class="fab fa-facebook fa-lg p-2"> Facebook</i> </a> 
                               
                                <a href="" class=" text-decoration:none ml-2 text-dark border">  <i class="fab fa-google fa-lg p-2"> Google</i>  </a> 
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center mt-4 mb-1">
                                <span class="h6">New to Agri-Higala?<a href="/register" class="mx-1 font-weight-bold">Sign up</a> </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
