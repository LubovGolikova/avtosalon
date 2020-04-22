@include('...mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Заявки</h3>
        @foreach($signups as $signup)
            <p>{{$signup->name}}</p>
            <p>{{$signup->phone}}</p>
        @endforeach
        <div class="container-pagination">
            {{$signups->links()}}
        </div>

    </div>

</div>
@include('...mini-footer')