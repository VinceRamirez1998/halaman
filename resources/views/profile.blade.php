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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee-like Profile Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f5f5;
    }
    .profile-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .profile-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .profile-header img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 20px;
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
      <div class="col-md-8 offset-md-2 profile-container">
        <div class="profile-header">
          <img src="https://via.placeholder.com/100" alt="Profile Picture">
          <div>
            <h2>John Doe</h2>
            <p class="text-muted">john.doe@example.com</p>
          </div>
        </div>
        <h4 class="mb-3">Personal Information</h4>
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" value="johndoe" required>
          </div>
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" value="John Doe" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="john.doe@example.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" value="+1234567890" required>
          </div>
          <h4 class="mb-3">Address Details</h4>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" value="1234 Main St" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" value="Anytown" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="state">State</label>
              <input type="text" class="form-control" id="state" value="Anystate" required>
            </div>
            <div class="form-group col-md-6">
              <label for="zip">Zip Code</label>
              <input type="text" class="form-control" id="zip" value="123456" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Update Profile</button>
        </form>
      </div>
    </div>
  </div>
  @include('components.footer')