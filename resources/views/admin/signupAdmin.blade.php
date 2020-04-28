@include('...mini-header')
<div class="container reviews">
    <div class="container">
        <h3>Заявки</h3>
        <div class="container-table">
       <table class="table" id="myTable">
              <thead>
                  <tr>
                       <th>#</th>
                       <th>Имя</th>
                       <th>Номер телефона</th>
                       <th>Дата</th>
                       <th></th>
                  </tr>
              </thead>
              <tbody>

                    @foreach($signups as $signup)
                    <tr>
                        <div class="container-signup row">
                        <td>{{$loop->iteration}}</td>
                        <td><p>{{$signup->name}} </p></td>
                        <td><p>{{$signup->phone}}</p></td>
                        <td><p>{{\Illuminate\Support\Carbon::parse($signup->created_at)->format('d.m.Y')}}</p></td>
                        </div>
                        <td>
                            <form action="/signup/admin/{{$signup->id}}" method="POST">
                                @csrf
                               @method('DELETE')
                            <button  class="btn btn-secondary">Удалить</button>
                            </form>
                        </td>
                    </tr>

                      @endforeach
              </tbody>

       </table>
       </div>
    </div>

</div>
@include('...mini-footer')
