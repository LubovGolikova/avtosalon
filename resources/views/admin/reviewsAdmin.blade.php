@include('mini-header')
<div class="container reviews">

        <h3>Отзывы</h3>

    @foreach($reviews as $review)
                   <p>{{$review->name}}</p>
                   @endforeach
</div>
@include('mini-footer')