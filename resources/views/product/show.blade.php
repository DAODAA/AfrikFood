@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" alt="food image"
                    class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['product']->getName() }}({{ $viewData['product']->getPrice() }} FCFA)
                    </h5>
                    <p class="card-text">{{ $viewData['product']->getDescription() }}</p>
                    <p class="card-text btn bg-primary text-white"><small>Add to Cart</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
