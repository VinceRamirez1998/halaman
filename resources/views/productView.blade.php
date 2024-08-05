@extends('layouts.app')
@include('components.header')
@guest
    @if (Route::has('login'))
        @include('components.navbar')
    @endif
     @else
    @include('components.navbarAuth')

    @endguest

<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500" class="img-fluid" alt="Product Image">
      </div>
      <div class="col-md-6">
        <h1 class="display-4">Product Title</h1>
        <p class="lead">This is a great product that you will love!</p>
        <h3 class="text-primary">$99.99</h3>
        <a href="{{ url('/productView') }}">
        <button class="btn btn-lg btn-success">Add to Cart</button>
        </a>
        <a href="{{ url('/checkout') }}">
        <button class="btn btn-lg btn-danger">Buy</button>
        </a>
        
        
      </div>
    </div>
  </div>
  @include('components.footer')