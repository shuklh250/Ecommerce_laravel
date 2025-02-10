<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')  }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2 class="text-light">E-commerce</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <form class="d-flex" role="search">
                    <div class="input-group">
                    <input class="form-control form-control-sm" style="width:300px;" type="search" placeholder="Search for products"
                        aria-label="Search">
                    <button class="btn btn-light text-mute btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                </form>
            </div>
            <div class="mx-5">
                <a href="#" class="text-decoration-none text-light">Become a Seller</a>
                <a href="#" class="btn theam-green-btn text-light"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                <a href="#" class="btn theam-ornage-btn text-light"><i class="fa-solid fa-user"></i>Login</a>
            </div>
        </div>
    </nav>
    
        {{-- category navbar  --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
          
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>