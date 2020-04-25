@include('mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Отзывы</h3>
        <div class="container-reviews-send">
            <form  method="POST" action="/reviews/admin/{{$review->id}}">
            @csrf
            @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Имя<span>*</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control   @error('name') is-invalid @enderror" id="name" name="name" value="{{$review->name}}">
                          @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                    </div>
                </div>
                 <div class="form-group row">
                     <label for="review" class="col-sm-1 col-form-label">Отзыв<span>*</span></label>
                     <div class="col-sm-10">
                       <textarea class="form-control   @error('review') is-invalid @enderror" id="review" name="review" style="height: 105px">{{$review->review}}</textarea>
                        @error('review')
                             <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                     </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-sm-1 col-form-label">Рейтинг<span>*</span></label>
                    <div class="col-sm-10">
                        <div class="rating edit" data-score="{{$review->rating}}"></div>
                       <input type="hidden" name="rating" class="input-rating" value="{{$review->rating}}"/>
                        @error('rating')
                              <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-check offset-1 mb-3">
                     <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="display" {{$review->display?'checked':''}}>
                    <label class="form-check-label" for="defaultCheck1">
                    Опубликовать
                    </label>
                </div>
                <div class="form-group row ">
                      <label for="submit" class="col-sm-1 col-form-label">Отмена</label>
                      <button type="submit" class="btn btn-default btn-review">
                           Сохранить
                      </button>
                </div>
            </form>
        </div>

        <div class="container mt-5">
            <h3>Ответ</h3>
            <div class="container-reviews-send">
                <form method="POST" action="/reviews/admin/{{$review->id}}/answer">
                    @csrf
                    @method('PUT')
                    @if($review->children)
                        <input type="hidden" name="idanswer" value="{{$review->children->id}}"/>
                     @endif
                    <div class="form-group row">
                        <label for="name" class="col-sm-1 col-form-label">Имя<span>*</span></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control   @error('name') is-invalid @enderror" id="name" name="name" value="Администратор">
                              @error('name')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                        </div>
                    </div>
                     <div class="form-group row">
                         <label for="review" class="col-sm-1 col-form-label">Ответ<span>*</span></label>
                         <div class="col-sm-10">
                           <textarea class="form-control   @error('review') is-invalid @enderror" id="review" name="answer" style="height: 105px">{{$review->children?$review->children->review:''}}</textarea>
                            @error('answer')
                                 <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                         </div>
                    </div>
                    <div class="form-group row ">
                         <label for="submit" class="col-sm-1 col-form-label">Отмена</label>
                            <button type="submit" class="btn btn-default btn-review">
                            Ответить
                            </button>
                    </div>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="wrap">
                <div class="popup">
                    <p>СПАСИБО!</p>
                    <p>{{session('success')}}</p>
                    <i class="fa fa-close "></i>
                </div>
            </div>
        @endif

    </div>

</div>
@include('mini-footer')