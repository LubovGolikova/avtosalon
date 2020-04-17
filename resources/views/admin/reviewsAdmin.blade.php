@include('mini-header')
<div class="container reviews">
  <div class="container">
        <h3>Отзывы</h3>
        @foreach($reviews as $review)
            <div class="name-container-reviews-receive row justify-content-between">
                <p>{{$review->name}}</p>
                <div class="stars row">
                   {{$review->getStarOnReviews($review->rating)}}
                </div>
            </div>
            <div class="container-reviews-admin-receive">
                <p>{{$review->review}}</p>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary">Редактировать</button>
              <button type="button" class="btn btn-secondary">Удалить</button>
              <button type="button" class="btn btn-secondary">Ответить</button>
            </div>
        @endforeach
      <div class="container-pagination">
           {{$reviews->links()}}
      </div>
  </div>
</div>
@include('mini-footer')