@extends('actor.layout')
@section('content')

<div class="card">
  <div class="card-header">Actors Page</div>
  <div class="card-body">

      <form action="{{ url('actor') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
