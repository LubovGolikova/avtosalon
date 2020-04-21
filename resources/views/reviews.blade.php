@include('mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Отзывы</h3>
        <div class="container-reviews-send">
            <form method="POST" action="/reviews">
            @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Имя<span>*</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control  form-control-r @error('name') is-invalid @enderror" id="name" name="name">
                          @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                    </div>
                </div>
                 <div class="form-group row">
                     <label for="review" class="col-sm-1 col-form-label">Отзыв<span>*</span></label>
                     <div class="col-sm-10">
                       <textarea class="form-control form-control-r  @error('review') is-invalid @enderror" id="review" name="review" style="height: 105px"></textarea>
                        @error('review')
                             <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                     </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-sm-1 col-form-label">Рейтинг<span>*</span></label>
                    <div class="col-sm-10">
                        <div class="rating"></div>
                       <input type="hidden" name="rating" class="input-rating"/>
                        @error('rating')
                              <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row ">
                      <label for="submit" class="col-sm-1 col-form-label">Отмена</label>
                      <button type="submit" class="btn btn-default btn-review">
                            Оставить отзыв
                      </button>
                </div>
            </form>
        </div>

        @if(session('success'))
            <div class="wrap">
                <div class="popup">
                    Спасибо
                    <i class="fa fa-close "></i>
                </div>
            </div>
        @endif

        @foreach($reviews as $review)
            <div class="name-container-reviews-receive row justify-content-between">
                <p>{{\Illuminate\Support\Carbon::parse($review->created_at)->format('d.m.Y')}} / {{$review->name}}</p>
                <div class="stars row">
                   {{$review->getStarOnReviews($review->rating)}}
                </div>
            </div>
            <div class="container-reviews-receive">
                <p>{{$review->review}}</p>
            </div>

            @if($review->children)
                  <div class="name-container-reviews-answer">
                     <p>{{\Illuminate\Support\Carbon::parse($review->created_at)->format('d.m.Y')}} / {{$review->children->name}}</p>
                     <div class="container-reviews-answer">
                        <p>{{$review->children->review}}</p>
                     </div>
                  </div>
            @endif
        @endforeach

        <div class="container-pagination">
            {{$reviews->links()}}
        </div>

    </div>

</div>
@include('mini-footer')