@extends('layouts.app')
@include('components.header')
@guest
    @if (Route::has('login'))
        @include('components.navbar')
    @endif
     @else
    @include('components.navbarAuth')

    @endguest
 <!-- Products Start -->
 
 <body>
  <!-- Main Content -->
  <div class="container mt-5">
  <h1 class="text-center">My Cart</h1>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Product 1</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$20.00</td>
            <td><button class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
          <tr>
            <td>Product 2</td>
            <td>1</td>
            <td>$15.00</td>
            <td>$15.00</td>
            <td><button class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="text-right py-4">
      <h3>Total: $35.00</h3>
      <a href="{{ url('/checkout') }}">
      <button class="btn btn-primary">Checkout</button>
      </a>
      
    </div>
  </div>
    <!-- Products End -->
@include('components.footer')
</body>