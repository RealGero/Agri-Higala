<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agri-Higala</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
      
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="bg">
                <div class="col-md-12">
                    <img src="/images/Logo.png" alt="logo" class="logo">
                    <img src="/images/agrihigala_word.png" alt="agrihigala word" class="word_logo">
                    
                </div>
                <div class="browse_nav">
                    
                        @if (Route::has('login')) 
                                @auth
                                    <a href="{{ url('/home') }}" class="home_nav">Home</a>
                                    
                                    @else
                                    <div class="welcome_nav">
                                        <div class="row">
                                            
                                            <div class="col">
                                                <a href="/" class="home_nav"><strong>Home</strong> </a>
                                            </div>
                                            <div class="col">
                                            <a href="{{ route('login') }}" class="home_nav"><strong>Login</strong></a>
                                            </div>
                                            <div class="col">
                                                <a href="/browse" class="home_nav"><strong>Browse</strong> </a>
                                            </div>
                                            @if (Route::has('register'))
                                                <div class="col">
                                                    <a href="{{ route('register') }}" class="home_nav"><strong>Sign Up</strong> </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endauth
            
                            
                        @endif
                            <p>"Connecting <br>
                            farmers and <br>
                            the community"
                           
                            </p>
                            
                </div>
                @include('include.footer')     
            </div>
        </div>   
        <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
        </script>
       
        <script  type="text/javascript"  src="{{asset ('js/main.js')}}"   ></script>
        
     </body>
            
               
           
</html>
