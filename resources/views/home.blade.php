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
              <a class="nav-item nav-link active" href="/">Главная <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link {!!Request::is('about') ? 'active' : '' !!}" href="/about">О нас<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link {!!Request::is('prices') ? 'active' : '' !!}" href="/prices">Цены<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews">Отзывы<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link {!!Request::is('services') ? 'active' : '' !!}" href="/services">Услуги<span class="sr-only">(current)</span></a>
            </div>
          </div>
          </div>
    </nav>


  <div class="container box-1 ">
      <div class="col-md-7 col-lg-6 text-left ">
         <h3>Уроки вождения</h3>
         <h1>У частного инструктура</h1>
         <p>Обучение проходит в комфортное для Вас время в любой части города! Уже через месяц Вы станете уверенным автомобилистом и перестанете бояться дорог!</p>
         <h4><span>225</span> грн/час первый урок!</h4>

         <a class="btn btn-default" href="/">Записаться</a>
      </div>
  </div>


  <div class="container box-2">
      <div class="row">
          <div class="col-md-6 ">
              <img src="{{asset('assets/images/cars.png')}}" alt=""/>
          </div>
          <div class="col-md-6 content">
          <h3 class="text-left mb-5 mt-3 mt-md-0"> О нас </h3>
          <span>Мечтаешь водить авто? Мы научим!</span>
          <p>В нашем коллективе инструктора - лидеры с огромным опытом работы.<br>
            Наши главные приоритеты - это качественное, индивидуальное, а главное профессиональное обучение. Мы обучаем от самого простого уровня (новички) вождения автомобилем и заканчиваем приобретением совершенных навыков.</p>

          <p>Мы предоставляем учебные автомобили мировых производителей , как с механической коробкой передач, так и с автоматической.<br>
          Все машины специально оборудованы, для комфортного и безопасного обучения.<br>
          Если вы хотите обучаться на своем  автомобиле для нас это не проблема! Мы с удовольствием будем проводить занятия на вашем личном авто.</p>
          </div>
      </div>
  </div>

</header>

<section class="box-3-about-1">
    <div class="base-color-box-3">
        <div class="container ">
            <div class="row align-items-center text-center justify-content-center py-3">
            <h2>Наши инструкторы дают уверенность за рулем</h2>
            <p>Мы выпускаем профессионалов - присоединяйтесь в нашу команду!</p>
            </div>
        </div>
    </div>
</section>

<section class="box-4-about-2">
    <div class="base-color-box-4">
        <div class="container mt-5 ">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig1.png')}}" alt=""/>
                    <p>Имеется частная закрытая площадка для отработки навыков вождения для наших учеников!</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig2.png')}}" alt=""/>
                    <p>15- летний стаж вождения ,из них на должности инструкторов в лучших школах Запорожья!</p>
                                      </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig3.png')}}" alt=""/>
                    <p>Десятки благодарных учеников и уверенных водителей на дорогах нашего города!</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="box-5-prices">
    <div class="container">
        <div class="col align-items-center  text-center  justify-content-center pt-5 ">
               <h5>Цены</h5>
               <p>С учетом топлива</p>
         </div>
        <div class="row align-items-center justify-content-center pt-5 text-center">
            <div class="col-md-4">
                <img src="{{asset('assets/images/wheel-fig-1.jpg')}}" alt=""/>
                <div class="price base-color-box-5">
                    <p><span>250</span> грн/час</p>
                    <p>Механика</p>
                 </div>
            </div>
            <div class="col-md-4">
                 <img src="{{asset('assets/images/wheel-fig-2.jpg')}}" alt=""/>
                 <div class="price base-color-box-5">
                    <p><span>300</span> грн/час</p>
                    <p>Автомат</p>
                 </div>
            </div>
            <div class="col-md-4">
                 <img src="{{asset('assets/images/wheel-fig-3.jpg')}}" alt=""/>
                 <div class="price base-color-box-5">
                    <p><span>225</span> грн/час</p>
                    <p>Ваше авто</p>
                 </div>
            </div>
        </div>
    </div>
</section>

<section class="box-6-sign">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <div class="box-6-sign-context col align-items-center  text-center  justify-content-center">
                    <h5 class="text-center">Записаться </h5>
                     <p>На урок вождения</p>
                </div>
                <form method="POST" action="">
                @csrf
                    <div class="logo">
                        <img src="{{asset('assets/images/logo2.png')}}"
                         alt="logoIcon" class="d-block mx-auto mb-5"/>
                    </div>
                    <div class="form-group row">
                        <div class="col ">
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=""  placeholder="Имя" required autocomplete="name" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                          <div class="col">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="" placeholder="Телефон" required autocomplete="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="role" value="author" id="role" {{ old('role') ? 'checked' : '' }}>
                                <label class="form-check-label" for="role">
                                   Я не робот
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-default invert">
                                Записаться
                            </button>
                        </div>
                    </div>
                    <div class="w-75 m-auto  mb-0 mt-3  text-center box-6-mt">
                        <h2><span>Мы Вам обязательно перезвоним</span></h2>
                        <div class="logo-hands">
                            <img src="{{asset('assets/images/logo-hands.png')}}"
                            alt="logoIcon" class="d-block mx-auto mb-5"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="box-7-reviews-1">
    <div class="container">
        <div class="base-color-box-7  text-center  mb-5">
            Отзывы наших учеников
        </div>
         <div class="row">
            <div class="box-7-reviews-box-1 col-md-4">
                <div class="row justify-content-md-around">
                    <h5>25.03.2019/Ирина </h5>
                    <img src="{{asset('assets/images/stars.png')}}" alt=""/>
                </div>
                <p>Идейные соображения высшего порядка, а также реализация намеченных плановых заданий в значительной степени обуславливает создание дальнейших направлений развития. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа соответствующий условий активизации...</p>
            </div>
            <div class="box-7-reviews-box-1 col-md-4">
                <div class="row justify-content-md-around">
                    <h5>25.03.2019/Ирина </h5>
                    <img src="{{asset('assets/images/stars.png')}}" alt=""/>
                </div>
                <p>Идейные соображения высшего порядка, а также реализация намеченных плановых заданий в значительной степени обуславливает создание дальнейших направлений развития. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа соответствующий условий активизации...</p>
            </div>
            <div class="box-7-reviews-box-1 col-md-4">
                <div class="row justify-content-md-around">
                    <h5>25.03.2019/Ирина </h5>
                    <img src="{{asset('assets/images/stars.png')}}" alt=""/>
                </div>
                <p>Идейные соображения высшего порядка, а также реализация намеченных плановых заданий в значительной степени обуславливает создание дальнейших направлений развития. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа соответствующий условий активизации...</p>
            </div>
         </div>
         <div class="box-7-reviews-box-1-reviews row justify-content-md-end">
             <p>Читать отзывы</p>
         </div>
    </div>
</section>

<footer id="footerId">
    <div class="container">
        <div class="container-add-sevices col col-md-12 align-items-center  text-center  justify-content-center mt-5">
            <h6>Дополнительные услуги</h6>
            <div class="base-color-footer align-items-center  text-center  justify-content-center">
                 <div class="col-md-4">
                    <div class="row">
                        <img src="{{asset('assets/images/footer-fig3.png')}}" alt=""/>
                        <div class="col">
                            <h2>Выбор авто</h2>
                            <p>Помощь в выборе и покупке авто.
                               Выезд вместе с покупателем на место продажи.</p>
                        </div>
                    </div>
                     <div class="row">
                        <img src="{{asset('assets/images/footer-fig4.png')}}" alt=""/>
                        <div class="col">
                            <h2>Консультации</h2>
                            <p>Консультирование в вопросах ремонта автомобиля.</p>
                        </div>
                     </div>
                 </div>
                <div class="col-md-4">
                    <div class="row">
                       <img src="{{asset('assets/images/footer-fig2.png')}}" alt=""/>
                       <div class="col">
                           <h2>Перегон авто</h2>
                           <p>Помощь в выборе и покупке авто в странах ЕС. Перегон авто через границу.</p>
                       </div>
                    </div>
                    <div class="row">
                        <img src="{{asset('assets/images/footer-fig1.png')}}" alt=""/>
                         <div class="col">
                            <h2>Помощь по телефону</h2>
                            <p>Круглосуточная поддержка по телефону в период обучения и после в любых вопросах.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center  text-center  justify-content-center mt-3">
            <a href="" class="d-block">г.Запорожье</a>
            <a href="" class="d-block">+38 067 929 32 22</a>
            <a href="" class="d-block">+38 095 319 34 08</a>
        </div>
         <div class="col align-items-center  text-center  justify-content-center mt-5">
            <div class="social">
                <a href="#"><i class="fa fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
             </div>
             <div class="row align-items-center  text-center  justify-content-center">
                <a href="/"><img src="{{asset('assets/images/logo-2.png')}}" alt=""/></a>
                <a class="nav-item nav-link active" href="/">Главная <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link {!!Request::is('about') ? 'active' : '' !!}" href="/about">О нас<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link {!!Request::is('prices') ? 'active' : '' !!}" href="/prices">Цены<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews">Отзывы<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link {!!Request::is('services') ? 'active' : '' !!}" href="/services">Услуги<span class="sr-only">(current)</span></a>
            </div>
         </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>