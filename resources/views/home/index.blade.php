@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-6 col-lg-8">
                <h2 class="text">Welcome to Africa, home of delicious foods ! </h2>
            </div>
            <div class="col-md-3 col-lg-2"></div>
        </div>
        <div class="row g-0">
            <div class="col-md-6 col-lg-4 mb-2 mx-auto">
                <img src="{{ asset('/img/soupe_viandes.jpg') }}" width="200px" height="300px" class="img-fluid rounded"
                    alt="plantain légumes">
                <h5 class="text my-2 ml-3">Traditional Foods</h5>
            </div>
            <div class="col-md-6 col-lg-4 mb-2 mx-auto">
                <img src="{{ asset('/img/beignets.jpg') }}" width="200px" height="300px" class="img-fluid rounded"
                    alt="beignets">
                <h5 class="text my-2 ml-3">Classic Foods</h5>
            </div>
            <div class="col-md-6 col-lg-4 mb-2 mx-auto">
                <img src="{{ asset('/img/peanuts.jpg') }}" width="200px" height="300px" class="img-fluid rounded"
                    alt="submarine">
                <h5 class="text my-2 ml-3">Others...</h5>
            </div>
        </div>
    </div>
@endsection
