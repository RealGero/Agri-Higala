@extends('layouts.app')


@section('content')
    
    <div class="container">
        <div class="inbox-container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-4 text-center overflow-auto border-right">
                                    <h3 class="mb-4">Name</h3> 
                                    <img src="/images/lansones.jpg" alt="" class="mb-3"> 
                                   <h5 class="d-inline p-2">John Doe</h5> <br>
                                   <img src="/images/lansones.jpg" alt=""> 
                                   <h5 class="d-inline p-2">John Doe</h5>
                                </div>  
                                <div class="col-8">
                                    <div class="border rounded p-2 other-msg mb-5">
                                        <span class="font-weight-bold"> John Doe</span>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugiat accusamus mollitia molestiae modi iste incidunt officia, eveniet exercitationem. Quibusdam quas iste culpa ut nam debitis quam, cum sapiente qui! </p>
                                        <span>8:45pm</span>
                                    </div>

                                    <div class="d-flex justify-content-end mb-5 p-2">
                                        <div class="owned-msg border rounded p-2 d-flex flex-column  ">
                                            <span class="font-weight-bold"> John Doe</span>
                                            <p> Lorem ipsum dol</p>
                                        <span>8:45pm</span>              
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <input class="form-control mr-3" type="text" placeholder="Type here . . . ." > 
                                        <a class="btn btn-primary " href="#" role="button">Send</a>
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