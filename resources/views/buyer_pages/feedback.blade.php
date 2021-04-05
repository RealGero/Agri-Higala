@extends('layouts.app')


@section('content')
    
    <div class="container">
        <div class="feedback">
            <div class="row">
                <div class="col-4 mx-auto">
                    <span class="h4">Feedback</span>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <span class="h6">Please rate our App</span>
                                </div>
                            </div>
                            <div class="row my-3 border-bottom mx-2">
                                <div class="col-12 d-flex justify-content-center ">
        
                                    <ul class="no-bullet d-flex flex-row mb-3 ">
                                        <li class="px-1"><i class="far fa-star fa-lg"></i></li>
                                        <li class="px-1"><i class="far fa-star fa-lg"></i></li>
                                        <li class="px-1"><i class="far fa-star fa-lg"></i></li>
                                        <li class="px-1"><i class="far fa-star fa-lg"></i></li>
                                        <li class="px-1"><i class="far fa-star fa-lg"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-12 d-flex flex-column">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Comment:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                      </div>
                                      <a class="btn btn-primary" href="#" role="button">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection