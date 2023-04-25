@extends('country.layout')
@section('content')

<div class="card">
  <div class="card-header">Actors Page</div>
  <div class="card-body">

      <form action="{{ url('country') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>


        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
