@extends('site.layout')
@section('title', 'Detalhes do produto')
@section('content')

<div class="row container"> <br>
    <div class="col s12 m6">
        <img src="{{ $product->image }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h4> {{ $product->name }} </h4>
        <h4> R$ {{ number_format($product->price, 2, ',', '.') }} </h4>
        <p> {{ $product->description }} </p>
        <p>
            Seller: {{ $product->user->first_name }} <br>
            Category: <strong>{{ $product->category->name }}</strong>
        </p>


        <button class="orange btn-large"> Comprar </button>
    </div>
</div>

@endsection
