@extends('layouts.app')

@section('title','Your Cart')

@section('content')

<div class="container">
    <h1>Your current items in your cart, {{ Auth::user()->name }}</h1>   
</div>

<div style="margin-left:-50%" class="mt-4">
    <div style="width:30%;" class="container">
    <form>
        <ul class="list-group">
        @foreach($cart as $carts)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $carts->cart_prod }}
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        @endforeach
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Total</strong>
                <span>&#8369; {{ $price }}</span>
            </li>
        </ul>
        <div>
            <button style="width:100%;margin-left:-1px" class="btn btn-md btn-info mt-2">
                Checkout 
            </button>
        </div>
    </form>
    </div>
</div>




@endsection('content')