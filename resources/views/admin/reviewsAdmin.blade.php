@include('mini-header')
<div class="container reviews">
  <div class="container">
        <h3>Отзывы</h3>
        @foreach($reviews as $review)
            <div class="border mb-2 {{!$review->display? 'border-danger': ''}}">
                <div class="name-container-reviews-receive row justify-content-between">
                    <p>{{\Illuminate\Support\Carbon::parse($review->created_at)->format('d.m.Y')}} / {{$review->name}}</p>
                    <div class="stars row">
                       {{$review->getStarOnReviews($review->rating)}}
                    </div>
                </div>
                <div class="container-reviews-admin-receive">
                    <p>{{$review->review}}</p>
                </div>
            </div>
            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                <a href="/reviews/admin/{{$review->id}}/edit" class="btn btn-secondary">Редактировать</a>
                     <form action="/reviews/admin/{{$review->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-secondary">Удалить</button>
                     </form>
            </div>
        @endforeach
      <div class="container-pagination">
           {{$reviews->links()}}
      </div>
  </div>
</div>
@include('mini-footer')