@extends('city.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('city/' .$city->city_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="city_id" id="city_id" value="{{$city->city_id}}" id="id" />
        <label> Name</label></br>
        <input type="text" name="city" id="city" value="{{$city->city}}" class="form-control"></br>
        <label> Country</label></br>
        <input type="text" name="country" id="country" value="{{$city->country->country}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
