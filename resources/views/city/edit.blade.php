@extends('city.layout')
@section('content')

<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">

      <form action="{{ url('city/' .$city->city_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="city_id" id="city_id" value="{{$city->city_id}}" id="id" />
        <label> Name</label></br>
        <input type="text" name="city" id="city" value="{{$city->city}}" class="form-control"></br>
        <label> Country</label></br>
        <select name="country_id" id="country_id">
        @foreach($country as $item)
            <option value="{{ $item->country_id }}">   {{ $item->country}} </option>
        @endforeach

        </select>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
