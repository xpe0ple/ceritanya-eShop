@extends('user.layout.index')

@section('content')
<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio repellendus porro fugit aspernatur voluptate incidunt soluta delectus dolorum, quisquam quos?
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('assets/images/ayang.jpg')}}" class="img-fluid rounded" alt="">
    </div>
</div>

<div class="d-flex flex-column flex-md-row justify-content-lg-between mt-5">
    <div class="d-flex align-items-center gap-3 mb-3 mb-md-0">
        <i class="fa fa-users fa-2x"></i>
        <p class="m-0 fs-5">+ 300 User</p>
    </div>
    <div class="d-flex align-items-center gap-3 mb-3 mb-md-0">
        <i class="fas fa-home fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Seller</p>
    </div>
    <div class="d-flex align-items-center gap-3">
        <i class="fa-solid fa-cake-candles fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Terjual</p>
    </div>
</div>

<h4 class="text-center mt-md-5 mb-md-3 mt-3">Contact Us</h4>
<hr class="mb-4" style="border: 2px solid #257180">
<div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary w-100" style="height: 66vh; border-radius: 10px;"></div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan Saran</h4>
                <p class="p-0 mb-3">Kritik dan saran anda kepada kami sangat membantu kami untuk memperbaiki sistem dan pelayanan kami sehingga kebutuhan anda dapat kami proses dengan lebih baik.</p>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan email anda">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan anda</label>
                    <textarea class="form-control" id="pesan" placeholder="Masukan pesan anda disini" rows="3"></textarea>
                </div>
                <button class="btn btn-danger mt-3 w-100">Kirim pesan anda</button>
            </div>
        </div>
    </div>
</div>
@endsection
