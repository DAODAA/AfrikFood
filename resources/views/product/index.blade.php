@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ asset('/img/' . $product->getImage()) }}" width="100px" alt="food image"
                        class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('productShow', ['id' => $product->getId()]) }}"
                            class="btn bg-primary text-white">{{ $product->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
