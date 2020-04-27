
@include('header')

  <div  class="container box-1 ">
      <div class="col-md-7 col-lg-6 text-left ">
         <h3>Уроки вождения</h3>
         <h1>У частного инструктора</h1>
         <p>Обучение проходит в комфортное для Вас время в любой части города! Уже через месяц Вы станете уверенным
         автомобилистом и перестанете бояться дорог!</p>
         <h4><span>225</span> грн/час первый урок!</h4>

         <a  id="yak1" class="btn btn-default scrollLink" href="#yak4">Записаться</a>
      </div>
  </div>


  <div  class="container box-2">
      <div class="row">
          <div class="col-md-6 ">
              <img src="{{asset('assets/images/cars.png')}}" alt=""/>
          </div>
          <div class="col-md-6 content mb-5">
          <h3 class="text-left mb-5 mt-3 mt-md-0"> О нас </h3>
          <span>Мечтаешь водить авто? Мы научим!</span>
          <p>В нашем коллективе автоинструктора - лидеры с огромным опытом работы. <br>
          Наши главные приоритеты - это качественное, индивидуальное, а главное профессиональное обучение вождению!
           Наши уроки вождения расчитаны от самого простого уровня вождения  автомобилем (новички) и заканчивают
           приобретением совершенных навыков. </p>

          <p>Мы предоставляем учебные автомобили мировых производителей, как с механической коробкой передач, так и с автоматической.
             Все машины специально оборудованы для комфортных, безопасных и индивидуальных уроков вождения. Если
             вы хотите обучаться на своем  автомобиле- для наших автоинструкторов это не проблема!
             Мы с удовольствием будем проводить занятия на вашем личном авто.</p>
          </div>
      </div>
  </div>

</header>

<section  class="box-3-about-1">
    <div class="base-color-box-3">
        <div class="container ">
            <div class="col align-items-center text-center justify-content-center py-3">
            <h2>Наши автоинструкторы дают уверенность за рулем</h2>
            <p>Мы выпускаем профессионалов - стань одним из них!</p>
            </div>
        </div>
    </div>
</section>

<section class="box-4-about-2 mb-5">
    <div class="base-color-box-4">
        <div class="container mt-5 ">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig1.png')}}" alt=""/>
                    <p>Имеется частная закрытая площадка для отработки навыков вождения для наших учеников!</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig2.png')}}" alt=""/>
                    <p>18 летний стаж работы, из них 10 лет на должности автоинструктора в лучших автошколах Запорожья!</p>
                                      </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/fig3.png')}}" alt=""/>
                    <p>Десятки благодарных учеников и уверенных водителей на дорогах нашего города!</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="yak2" class="box-5-prices scrollLink">
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

<section id="yak4" class="box-6-sign scrollLink">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="box-6-sign-context col align-items-center  text-center  justify-content-center">
                    <h5 class="text">Записаться </h5>
                     <p>на урок вождения</p>
                </div>
                <form method="POST" action="/">
                @csrf
                    <div class="logo">
                        <img src="{{asset('assets/images/logo.png')}}"
                         alt="logoIcon" class="d-block mx-auto mb-5"/>
                    </div>
                    <div class="form-group row">
                        <div class="col ">
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value=""  placeholder="Имя" required autocomplete="name" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                          <div class="col">
                            <input id="phone" type="tel" pattern="[+]{1}[0-9]{11,14}" class="form-control @error('phone')
                             is-invalid @enderror" name="phone" value="" placeholder="Телефон"  title="+ХХХХХХХХХХХ,
                              например +380932568778" size="13" minlength="13" required autocomplete="phone">
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
                                <input class="form-check-input" type="checkbox" required name="robot" value="0" id="robot" {{ old('robot') ? 'checked' : '' }}>
                                <label class="form-check-label" for="robot" >
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
     @if(session('success'))
          <div class="wrap">
               <div class="popup">
                   <p>СПАСИБО!</p>
                   <p>Ваша заявка отправлена.</p>
                    <i class="fa fa-close "></i>
               </div>
          </div>
     @endif

</section>

<footer id="footerId">
    <div class="container">
        <div class="box-7-reviews-1">
            <div class="base-color-box-7  text-center  mb-5">
                Отзывы наших учеников
            </div>
             <div class="row  align-items-center  text-center  justify-content-center slider home-reviews-block">
                @foreach($reviews as $review)
                    <div class="box-7-reviews-box-1 col-md-3">
                        <div class="row justify-content-md-between m-0 p-1">
                            <h5>{{\Illuminate\Support\Carbon::parse($review->created_at)->format('d.m.Y')}} / {{$review->name}}</h5>
                            <div class="stars row m-0">
                               {{$review->getStarOnReviews($review->rating)}}
                            </div>
                               <p>{{$review->review}}</p>
                        </div>
                    </div>
               @endforeach
             </div>
             <div class="box-7-reviews-box-1-reviews row justify-content-md-end justify-content-center mt-3 mt-md-0">
                 <a href="/reviews" ><p>Читать отзывы</p></a>
             </div>
        </div>
        <div id="yak3"  class="container-add-services col col-md-12 align-items-center  text-center  justify-content-center mt-5 scrollLink">
            <h6>Дополнительные услуги</h6>
            <div class="base-color-footer ">
                <div class="row align-items-center  text-center  justify-content-center px-lg-5">
                 <div class="col-md-6">
                    <div class="py-md-5 py-2 d-md-flex">
                        <div class="col-md-5"> <img src="{{asset('assets/images/footer-fig3.png')}}" alt=""/></div>

                        <div class="col mt-3 mt-md-0 text-center text-md-left">
                            <h2>Выбор авто</h2>
                            <p>Помощь в выборе и покупке авто.
                               Выезд вместе с покупателем на место продажи.</p>
                        </div>
                    </div>
                    <div class="d-md-flex">
                       <div class="col-md-5">  <img src="{{asset('assets/images/footer-fig4.png')}}" alt=""/></div>
                        <div class="col mt-3 mt-md-0 text-center text-md-left">
                            <h2>Консультации</h2>
                            <p>Консультирование в вопросах ремонта автомобиля.</p>
                        </div>
                     </div>
                 </div>
                <div class="col-md-6">
                    <div class="py-md-5 py-2 d-md-flex">
                      <div class="col-md-5">  <img src="{{asset('assets/images/footer-fig2.png')}}" alt=""/></div>
                       <div class="col mt-3 mt-md-0 text-center text-md-left">
                           <h2>Перегон авто</h2>
                           <p>Помощь в выборе и покупке авто в странах ЕС. Перегон авто через границу.</p>
                       </div>
                    </div>
                    <div class="d-md-flex">
                       <div class="col-md-5">  <img src="{{asset('assets/images/footer-fig1.png')}}" alt=""/></div>
                         <div class="col mt-3 mt-md-0 text-center text-md-left">
                            <h2>Помощь по телефону</h2>
                            <p>Круглосуточная поддержка по телефону в период обучения и после в любых вопросах.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-city col mt-3">
            <div class="row align-items-center  text-center  justify-content-center ">
                <a href="" class="d-block">г.Запорожье</a>
                <a href="" class="d-block">+38 067 929 32 22</a>
                <a href="" class="d-block">+38 095 319 34 08</a>
            </div>
            <div class="footer-block row align-items-center  text-center  justify-content-center ">
                <div class="social">
                    <a href="https://www.instagram.com/avtoinstruktor_zp/?igshid=z8y4l7krbxf0"><i class="fa fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/%D0%9C%D0%B0%D0%BA%D1%81-%D0%9C%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D0%BE%D0%B2-109746004019956/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    <a href="https://t.me/MaksiMaks81"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="footer-base row align-items-center  text-center  justify-content-center flex-column flex-md-row">
                <a href="/" class="my-3 my-md-0"><img src="{{asset('assets/images/logo.png')}}" alt=""/></a>
                <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="/">Главная</a>
                <a class="nav-link {!!Request::is('/#yak1') ? 'active' : '' !!}" href="#yak1">О нас</a>
                <a class="nav-link {!!Request::is('/#yak2') ? 'active' : '' !!}" href="#yak2">Цены</a>
                <a class="nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/reviews">Отзывы</a>
                <a class="nav-link {!!Request::is('/#yak3') ? 'active' : '' !!}" href="#yak3">Услуги</a>
            </div>
         </div>
         <div class="footerId-rights row justify-content-md-end justify-content-center">
                <p>&copy; Все права защищены</p>
         </div>
    </div>
</footer>
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('assets//slick/slick.min.js')}}"></script>
<script>

$('.popup .fa-close').click(function(){
    $('.wrap').remove()
});

$('.wrap').click(function(e){
console.log(e.target)
if(e.target.classList.contains('wrap'))
    $('.wrap').remove()
});

$('.slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
   responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
});

$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);
    }

});
</script>
</body>
</html>