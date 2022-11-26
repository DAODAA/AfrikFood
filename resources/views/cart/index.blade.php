@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">Products in Cart</div>
        <div class="card-body">
            <table class="table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }} FCFA</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> {{ $viewData['total'] }} FCFA</a>
                    @if (count($viewData['products']) > 0)
                        <a href="{{ route('cartPurchase') }}" class="btn btn-primary text-white mb-2">Purchase</a>
                        <a href="{{ route('cartDelete') }}">
                            <button class="btn btn-danger mb-2">
                                Remove all products from Cart
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
