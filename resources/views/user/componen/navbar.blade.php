<nav class="navbar navbar-dark navbar-expand-lg" style="background-image: linear-gradient(to right, #1c3e35, #99f2d1)">
    <div class="container">
        <a class="navbar-brand" href="/">eShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'activate' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('shop') ? 'activate' : '' }}" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'activate' : '' }}" href="/contact">Contact Us</a>
                </li>        
            </ul>
            <div class="d-flex align-items-center gap-3">
                <a href="/transaksi" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #B8001F; color: white;">Login | Register</a>
                <div class="notif position-relative">
                    <a href="/transaksi" class="ms-2">
                        <i class="fa-solid icon-nav fa-cart-shopping"></i>
                    </a>
                    <div class="circle">10</div>
                </div>
            </div>
        </div>
    </div>
  </nav>
  