@include('...mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Заявки</h3>
        @foreach($signups as $signup)
        <div class="container-signup row">
            <p>{{$signup->name}} </p>
            <p>{{$signup->phone}}</p>
            </div>
            <form action="/signup/admin/{{$signup->id}}" method="POST">
                @csrf
               @method('DELETE')
            <button  class="btn btn-secondary">Удалить</button>
            </form>
        @endforeach
        <div class="container-pagination">
            {{$signups->links()}}
        </div>

    </div>

</div>
@include('...mini-footer')