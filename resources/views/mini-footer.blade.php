<footer id="mini-footerId">
    <div class="container">
        <div class="content-city col mt-5">
            <div class="row align-items-center  text-center  justify-content-center s">
                <a href="" class="d-block">г.Запорожье</a>
                <a href="" class="d-block">+38 067 929 32 22</a>
                <a href="" class="d-block">+38 095 319 34 08</a>
            </div>
            <div class="footer-block row align-items-center  text-center  justify-content-center ">
                <div class="social">
                    <a href="https://www.facebook.com/%D0%9C%D0%B0%D0%BA%D1%81-%D0%9C%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D0%BE%D0%B2-109746004019956/"><i class="fa fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/avtoinstruktor_zp/?igshid=z8y4l7krbxf0"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
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
         <div class="footerId-rights row justify-content-md-end  justify-content-center">
                <p>&copy; Все права защищены</p>
         </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('/assets/rate/jquery.raty.js')}}"></script>
<script>
$('.rating').raty({
starOff:'/assets/rate/images/star-off.png',
starOn:'/assets/rate/images/star-on2.png',
click: function(score, evt) {
    $('.input-rating').val(score)
  }
});

$('.rating.edit').raty('score', $('.rating.edit').attr('data-score'));

$('.popup .fa-close').click(function(){
    $('.wrap').remove()
});

$('.wrap').click(function(e){
console.log(e.target)
if(e.target.classList.contains('wrap'))
    $('.wrap').remove()
});

</script>
</body>
</html>