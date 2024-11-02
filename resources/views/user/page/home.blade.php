@extends('user.layout.index')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/images/gojo-purple.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/marvel1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/akatsuki.png')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
  

<h4 class="mt-5">Best Seller</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-4 mb-5">
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
    </div>
    <h4 class="mt-5">New Product</h4>
    <div class="content mt-3 d-flex flex-lg-wrap gap-4 mb-5 ">
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:200px">
            <div class="card-header m-auto" style="border-radius: 5px">
                <img src="{{asset('assets/images/cake6remo.png')}}" alt="kue1" style="width:100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Kue Enak</p>
                <p class="m-0">
                    <!-- Star Rating -->
            <span class="text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </span>
                </p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.200.000</p>
                <button class="btn btn-outline-danger" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
@endsection