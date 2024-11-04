@extends('user.layout.index')

@section('content')
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .small-img {
        max-width: 100%; /* Ensure the image is responsive */
        height: auto; /* Maintain aspect ratio */
    }
</style>

<h3 class="mt-5">Keranjang Belanja</h3>
<div class="card">
    <div x-data="{ qty: 1, harga: 200000, total() { return this.qty * this.harga } }" class="card-body d-flex flex-column flex-md-row gap-4">
        <img src="{{ asset('assets/images/cake6remo.png') }}" alt="" class="small-img">
        <div class="desc flex-grow-1">
            <p style="font-size: 24px; font-weight: 700;">Kue Enak</p>
            <input type="number" x-model="harga" class="form-control border-0 fs-1" readonly>
            <div class="row mt-3">
                <label for="qty" class="col-sm-5 col-form-label fs-5">Quantity</label>
                <div class="col-sm-7 d-flex">
                    <button @click="qty > 0 ? qty-- : qty = 0" class="btn-minus rounded-start transparent-btn p-2 border-0">-</button>
                    <input type="number" x-model="qty" class="form-control w-55 h-auto text-center qty-input" min="0" max="999">
                    <button @click="qty++" class="btn-plus rounded-end transparent-btn p-2 border-0">+</button>
                </div>
            </div>
            <div class="row mt-3">
                <label for="total" class="col-sm-5 fs-5">Total</label>
                <input type="text" class="col-sm-7 form-control w-50 border-0" readonly x-bind:value="total()">
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-column mt-3">
                    <a href="/checkOut" class="btn btn-success mb-2 w-100 d-flex align-items-center justify-content-center" style="border-radius: 15px;">
                        <i class="fa fa-shopping-cart me-2"></i> 
                        <span>Checkout</span>
                    </a>                
                    <a href="#" class="btn btn-danger mb-2 w-100 d-flex align-items-center justify-content-center" style="border-radius: 15px;">
                        <i class="fa fa-trash-alt me-2"></i> 
                        <span>Delete</span>
                    </a>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
