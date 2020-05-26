<!doctype html>
<html lang="en">
  <head>
    <title>@yield('doc-tittle')</title> {{--buat dinamisin tittle pada browser--}}
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/57dc8fd447.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Ronaldo Css --}}
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('CSS/ronaldo/product.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/aldowardana/index.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/aldowardana/portfolio.css')}}">
=======
  <link rel="stylesheet" href="{{asset('CSS/ronaldo/product.css')}}">
  <style>
    .section{
      background-color: #8AA5FC;
      position: relative;
    }
    .section-text{
      width: 100%;
      height: 100%;
      opacity: 100%;
      font-size: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      color: white;
      font-weight: bolder;
    }
    .section-text p{
    position: relative;
    z-index: 2;
    }
  .parallax{
    background-image:url("http://fidiitkreatif.co.id/template/img/bg-img/8.jpg");
    /* Set a specific height */
    min-height: 500px; 
    opacity: 40%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
  </style>
>>>>>>> 153fce5f9307d12feb0cf6e2bcb1560142a765ab
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" style="background-color: #8AA5FC;">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <a class="navbar-brand" href="/"><i class="fas fa-percentage"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="col-md-6">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            {{--Gunakan untuk membuat active tag secara dinamis pada navbar--}}
            <a class="nav-item nav-link @yield('home-active')" href="/">Home</a>
            <a class="nav-item nav-link @yield('about-active')" href="/about">About</a>
            <a class="nav-item nav-link @yield('product-active')" href="/product">Product</a>
            <a class="nav-item nav-link @yield('services-active')" href="/services">Services</a>
            <a class="nav-item nav-link @yield('porto-active')" href="/portfolio">Portofolio</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <section>
    <div class="section">      
      <div class="section-text">
      <p>@yield('section-head')</p>
      </div>
        <div class="parallax"></div>
  </div>
  
  </section>
