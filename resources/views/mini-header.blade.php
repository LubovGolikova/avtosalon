<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Avtosalon</title>
 <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('styles/style.css')}}">
 <link rel="stylesheet" href="{{asset('assets/rate/jquery.raty.css')}}">
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="reviews-page">
<header id="mini-headerId">
  <div class="container-inner-top">
      <div class="container d-md-flex flex-row justify-content-center align-items-center text-center">
            <div class="content-city-header d-md-flex flex-row justify-content-center  ml-auto">
              <a href="" class="d-block">г.Запорожье</a>
              <a href="" class="d-block">+38 067 929 32 22</a>
              <a href="" class="d-block">+38 095 319 34 08</a>
            </div>
             <div class="social ml-auto mt-2 mt-md-0">
                <a href="https://www.facebook.com/%D0%9C%D0%B0%D0%BA%D1%81-%D0%9C%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D0%BE%D0%B2-109746004019956/"><i class="fa fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/avtoinstruktor_zp/?igshid=z8y4l7krbxf0"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                <a href="https://t.me/MaksiMaks81"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
             </div>
      </div>
  </div>

  <nav class="mini-header-nav navbar navbar-expand-lg navbar-light bg-light-blue">
        <div class="container">
         @csrf
         <div class="navbar-brand"> <a href="/">
             <img src="{{asset('assets/images/logo.png')}}" alt=""/>
             </a>
         </div>
          <button class="mini-header-nav navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" mini-header-nav navbar-toggler-icon"></span>
          </button>
          <div class=" mini-header-nav collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mini-header-nav navbar-nav mx-auto align-md-items-center">
              <a class="mini-header-nav nav-item nav-link {!!Request::is('/') ? 'active' : '' !!}" href="/">Главная <span class="sr-only">(current)</span></a>
              <a class=" mini-header-nav nav-item nav-link {!!Request::is('/#yak1') ? 'active' : '' !!}" href="/#yak1">О нас</a>
              <a class=" mini-header-nav nav-item nav-link {!!Request::is('/#yak2') ? 'active' : '' !!}" href="/#yak2">Цены</a>
              <a class=" mini-header-nav nav-item nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews">Отзывы</a>
              <a class=" mini-header-nav nav-item nav-link {!!Request::is('/#yak3') ? 'active' : '' !!}" href="/#yak3">Услуги</a>
              @auth
                   <a class="nav-item nav-link {!!Request::is('/reviews/admin') ? 'active' : '' !!}" href="/reviews/admin"> Управление Отзывами</a>
                   <a class="nav-item nav-link {!!Request::is('/signup/admin') ? 'active' : '' !!}" href="/signup/admin"> Управление Заявками</a>
               @endauth
            </div>
          </div>
          </div>
    </nav>
