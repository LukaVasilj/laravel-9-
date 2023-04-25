@extends('city.layout')
@section('content')


<div class="card">
  <div class="card-header">Country Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $city->city }}</h5>
        <h5 class="card-title">Country : {{ $city->country->country }} </h5>


  </div>

    </hr>

  </div>
</div>
