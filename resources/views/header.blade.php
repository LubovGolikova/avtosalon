<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Avtosalon</title>
 <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('styles/style.css')}}">
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="home-page">
<header id="headerId">
  <div class="container-inner-top d-md-flex flex-row justify-content-center align-items-center">

      <a href="" class="d-block">г.Запорожье</a>
      <a href="" class="d-block">+38 067 929 32 22</a>
      <a href="" class="d-block">+38 095 319 34 08</a>

     <div class="social">
        <a href="#"><i class="fa fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
     </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light-blue">
        <div class="container">
         @csrf
         <div class="navbar-brand"> <a href="/">
             <img src="{{asset('assets/images/logo-2.png')}}" alt=""/>
             </a>
         </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto align-md-items-center">
              <a class="nav-item nav-link active" href="/">Главная </a>
              <a class="nav-item nav-link {!!Request::is('about') ? 'active' : '' !!}" href="/about">О нас</a>
              <a class="nav-item nav-link {!!Request::is('prices') ? 'active' : '' !!}" href="/prices">Цены</a>
              <a class="nav-item nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews">Отзывы</a>
              <a class="nav-item nav-link {!!Request::is('services') ? 'active' : '' !!}" href="/services">Услуги</a>
              @auth
              <a class="nav-item nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews/admin"> Управление Отзывами</a>
              @endauth
            </div>

          </div>
          </div>
    </nav>
