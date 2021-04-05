@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="contact-us">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row my-3">
                                <div class="col-12 d-flex justify-content-center">
                                   <img src="/images/background_green-2.png" alt="">
                                </div>
                            </div>
                            <h1 class="d-flex justify-content-center font-weight-bold">Contact Us</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="row  my-3 border-bottom ">
                                <div class="col-12 d-flex flex-column  ">
                                    <span class="d-flex justify-content-center"> <i class=" mb-2 fa fa-lg fa-phone-alt d-flex justify-content-center pb-1 contactus-icon"></i> </span>
                                   
                                    <span class="h5">Give us a call</span>
                                    <span class="h6">09264456547</span>
                                </div>         
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="row  my-3 border-bottom">
                                <div class="col-12 d-flex flex-column">
                                   <span class="d-flex justify-content-center"> <i class="fas fa-envelope contactus-icon d-flex justify-content-center mb-2"></i> </span> 
                                    <span class="h5 d-flex justify-content-center">Email us on</span>
                                    <span class="h6 d-flex justify-content-center">CdoCityAgri@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="row  my-3">
                                <div class="col-12 d-flex flex-column">
                                   <span class="d-flex justify-content-center"> <i class="fas fa-map-marker-alt contactus-icon"></i> </span> 
                                    <span class="h5 d-flex justify-content-center">Visit our location</span>
                                    <span class="h6">89 Hayes St, Cagayan de Oro City</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 
{{-- <table class="table">
    <tbody>
      <tr>
        <td rowspan="2"> <i class="fa fa-md fa-phone-alt"></i></td>
        <td><span class="h5">  Give us a call</span></td> 
      </tr> 
      <tr>
        <td><span class="ml-4 h6">09264456547</span></td> 
      </tr> 
      <tr>
        <td rowspan="2">Mark</td>
        <td>Otto</td> 
      </tr> 
      <tr>
        <td>Otto</td> 
      </tr> 
    </tbody>
  </table> --}}