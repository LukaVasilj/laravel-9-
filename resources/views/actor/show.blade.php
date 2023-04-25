@extends('actor.layout')
@section('content')


<div class="card">
  <div class="card-header">Actors Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $actor->first_name }}</h5>
        <p class="card-text">Last Name : {{ $actor->last_name }}</p>

  </div>

    </hr>

  </div>
</div>
