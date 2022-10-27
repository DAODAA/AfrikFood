@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">{{ $viewData['description'] }}</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $viewData['author'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="text-center lead text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore saepe inventore unde obcaecati, fugit
                laborum incidunt accusamus soluta magnam veniam facilis quidem libero nemo harum. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Atque, labore.
            </div>
        </div>
    </div>
@endsection
