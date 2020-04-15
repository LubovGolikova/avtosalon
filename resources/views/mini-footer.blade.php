
    <div class="container">
        <div class="content-city col mt-5">
            <div class="row align-items-center  text-center  justify-content-center s">
                <a href="" class="d-block">г.Запорожье</a>
                <a href="" class="d-block">+38 067 929 32 22</a>
                <a href="" class="d-block">+38 095 319 34 08</a>
            </div>
            <div class="row align-items-center  text-center  justify-content-center mt-5">
                <div class="social">
                    <a href="#"><i class="fa fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="footer-base row align-items-center  text-center  justify-content-center">
                <a href="/"><img src="{{asset('assets/images/logo-2.png')}}" alt=""/></a>
                <a class="nav-link active" href="/">Главная<span class="sr-only">(current)</span></a>
                <a class="nav-link {!!Request::is('us') ? 'active' : '' !!}" href="/">О нас<span class="sr-only">(current)</span></a>
                <a class="nav-link {!!Request::is('prices') ? 'active' : '' !!}" href="/">Цены<span class="sr-only">(current)</span></a>
                <a class="nav-link {!!Request::is('reviews') ? 'active' : '' !!}" href="/">Отзывы<span class="sr-only">(current)</span></a>
                <a class="nav-link {!!Request::is('services') ? 'active' : '' !!}" href="/">Услуги<span class="sr-only">(current)</span></a>
            </div>
         </div>
         <div class="footerId-rights row justify-content-md-end">
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
starOff:     '/assets/rate/images/star-off.png',
starOn:      '/assets/rate/images/star-on2.png',
click: function(score, evt) {
    $('.input-rating').val(score)
  }
});

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