<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Avtosalon</title>
 <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('styles/style.css')}}">
</head>
<body class="home-page">
<header id="headerId">
  <div class="container-inner-top d-md-flex flex-row justify-content-center align-items-center">

      <a href="" class="d-block">г.Запорожье</a>
      <a href="" class="d-block">+38 067 929 32 22</a>
      <a href="" class="d-block">+38 095 319 34 08</a>

     <div class="social">
        <a href="#"><i class="fa fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
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
          <a class="nav-item nav-link active" href="#">Главная <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">О нас<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Цены<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Отзывы<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Услуги<span class="sr-only">(current)</span></a>
        </div>
      </div>
      </div>
</nav>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>