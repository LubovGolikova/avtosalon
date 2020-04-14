@include('mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Отзывы</h3>
        <div class="container-reviews-send">
            <form method="POST" action="">
            @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Имя<span>*</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control-r" id="name" name="name">
                    </div>
                </div>
                 <div class="form-group row">
                     <label for="review" class="col-sm-1 col-form-label">Отзыв<span>*</span></label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control-r" id="review" name="review">
                     </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-sm-1 col-form-label">Рейтинг<span>*</span></label>
                    <div class="col-sm-10">
                         <a href="#"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></a>
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

    </div>
</div>
