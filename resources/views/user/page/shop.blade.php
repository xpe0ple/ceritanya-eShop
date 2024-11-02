@extends('user.layout.index')

@section('content')
<div class="row mt-5">
    <div class="col-md-3">
        <div class="card" style="width: 100%;"> 
            <div class="card-header">
                Category
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Dessert
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion-body p-0">
                                <div class="d-flex flex-column gap-2">
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Cake
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Donuts
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Ice Cream  
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Cookies  
                                  </a>
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Bread
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion-body p-0">
                                <div class="d-flex flex-column gap-2">
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Cake
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Donuts
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Ice Cream  
                                  </a>
                                  <a href="#" class="page-link">
                                      <i class="fas"></i>Cookies  
                                  </a>
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Drink 
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-2">
                                <a href="#" class="page-link">
                                    <i class="fas"></i>Sandwich
                                </a>
                                <a href="#" class="page-link">
                                    <i class="fas"></i>Toast
                                </a>
                              </div> 
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 mb-5 d-flex flex-wrap gap-2">
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
            <nav class="m-auto mt-3">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
         </div>
</div>

@endsection