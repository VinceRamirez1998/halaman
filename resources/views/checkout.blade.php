@extends('layouts.app')
@include('components.header')

@guest
    @if (Route::has('login'))
        @include('components.navbar')
    @endif
     @else
    @include('components.navbarAuth')

    @endguest
   
    <head>
    <style>
    body {
      background-color: #f5f5f5;
    }
    .checkout-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .order-summary {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 30px;
    }
    .summary-item {
      border-bottom: 1px solid #dee2e6;
      padding: 10px 0;
    }
    .summary-item:last-child {
      border-bottom: none;
    }
    .total {
      font-weight: bold;
    }
    .promo-code {
      margin-top: 20px;
    }
    .btn-primary {
      background-color: #ff424f;
      border: none;
    }
    .btn-primary:hover {
      background-color: #ff202d;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-8 checkout-container">
        <h2 class="mb-4">Checkout</h2>
        <h4 class="mb-3">Shipping Information</h4>
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          </div>
          <div class="form-group">
            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" required>
            </div>
            <div class="form-group col-md-4">
              <label for="state">State</label>
              <select id="state" class="form-control" required>
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="zip">Zip</label>
              <input type="text" class="form-control" id="zip" required>
            </div>
          </div>
          <h4 class="mb-3">Payment</h4>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Cash on delivery</label>
            </div>
            
          </div>
         
         
          
          <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
      </div>
      <div class="col-md-4">
        <div class="order-summary">
          <h4 class="mb-3">Order Summary</h4>
          <div class="summary-item">
            <img src="https://via.placeholder.com/50" alt="Product 1">
            <div class="item-details">
              <span>Product 1</span><br>
              <span>Unit Price: $10.00</span><br>
              <span>Quantity: 2</span>
            </div>
            <div class="item-price">
              <span>$20.00</span>
            </div>
          </div>
          <div class="summary-item">
            <img src="https://via.placeholder.com/50" alt="Product 2">
            <div class="item-details">
              <span>Product 2</span><br>
              <span>Unit Price: $15.00</span><br>
              <span>Quantity: 1</span>
            </div>
            <div class="item-price">
              <span>$15.00</span>
            </div>
          </div>
          <div class="total">
            <span>Total</span>
            <span>$35.00</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

  @include('components.footer')