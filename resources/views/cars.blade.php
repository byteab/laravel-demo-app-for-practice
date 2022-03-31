@extends("layout")

@section('content')
<table class="pure-table">
    <thead>
        <tr>
            <th>Car Name</th>
            <th>Car Model</th>
            <th>Price</th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->car_name}}</td>
            <td>{{$car->car_model}}</td>
            <td>{{$car->price}}</td>
            <td>{{$car->year}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="pure-button pure-button-primary" style="margin-top:10px" href="{{route('get.car.add')}}">Add New Car</a>
@stop