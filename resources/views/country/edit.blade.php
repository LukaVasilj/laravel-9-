@extends('country.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('country/' .$country->country_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="country_id" id="country_id" value="{{$country->country_id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="country" id="country" value="{{$country->country}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
