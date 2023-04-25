@extends('actor.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('actor/' .$actor->actor_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="actor_id" id="actor_id" value="{{$actor->actor_id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$actor->first_name}}" class="form-control"></br>
        <label> LastName</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$actor->last_name}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
