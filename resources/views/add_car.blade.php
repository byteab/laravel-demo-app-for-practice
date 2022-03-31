@extends("layout")

@section('content')

<div class="container">
<h3>New Car</h3>
  <form class="pure-form-stacked" method="POST" action="{{route('post.car.add')}}">
    @csrf
    <label for="cname">Car Name</label>
    <input type="text" id="cname" name="car_name" placeholder="Car Name">

    <label for="car_model">Car Model</label>
    <input type="text" id="car_model" name="car_model" placeholder="Car Model">

    <label for="price">Price</label>
    <input type="number" id="price" name="price" placeholder="Price">

    <label for="year">Year</label>
    <input type="number" id="year" name="year" placeholder="Year">

    <input class="pure-button pure-button-primary" type="submit" value="Submit">
  </form>
</div>
@stop