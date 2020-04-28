<div>

    <table class="table">
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
            <tr>
                <td><p>1. </p></td>
                <td><p>{{$signup->name}}  </p></td>
                <td><p>{{$signup->phone}}</p></td>
                <td><p>{{\Illuminate\Support\Carbon::parse($signup->created_at)->format('d.m.Y')}}</p></td>
            </tr>
        </tbody>
    </table>

</div>