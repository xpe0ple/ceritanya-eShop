<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset ('css/user.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <!-- Include Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <!-- Include Custom JS -->
        <script src="{{ asset('js/user.js') }}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>eShop | {{$title}}</title>
</head>
<body>
    <main>
        <div class="row">
            <div class="col-md-3 col-lg-2">
                <aside class="sidebar navbar navbar-expand-lg flex-column gap-3  align-content-lg-center mx-2 my-3 rounded-4">
                    <h5 class="mt-3">eShop</h5>
                    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex flex-column gap-4">
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <span class="material-icons">
                                            dashboard
                                        </span>
                                        <p class="p-0 m-0">Dashboard</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <span class="material-icons">
                                            inventory
                                        </span>
                                        <p class="p-0 m-0">Product</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <span class="material-icons">
                                            people_alt
                                        </span>
                                        <p class="p-0 m-0">User Management</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <span class="material-icons">
                                            insert_chart
                                        </span>
                                        <p class="p-0 m-0">Report</p>
                                    </div>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a href="#" class="nav-link">
                                    <div class="d-flex gap-3">
                                        <span class="material-icons">
                                            logout
                                        </span>
                                        <p class="p-0 m-0">Logout</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-9 mx-2 my-2">
            <section>
                Dashboard
            </section>
            </div>
        </div>
    </main>
</body>
</html>
