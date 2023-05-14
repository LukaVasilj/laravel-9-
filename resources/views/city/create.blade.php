@extends('city.layout')
@section('content')

<div class="card">
  <div class="card-header">Actors Page</div>
  <div class="card-body">

      <form action="{{ url('city') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>Choose Country : </label></br>
        <!--<input type="text" name="country_id" id="country_id" class="form-control"></br>-->

        <select name="country_id" id="country_id">
        @foreach($country as $item)
            <option value="{{ $item->country_id }}">   {{ $item->country}} </option>
        @endforeach

        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
