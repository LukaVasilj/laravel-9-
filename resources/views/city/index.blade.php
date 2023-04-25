@extends('city.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                        <a href="{{ url('actor') }}">
                    Actor
                </a>
                <br>
                <a href="{{ url('country') }}">
                    Countries
                </a>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/city/create') }}" class="btn btn-success btn-sm" title="Add New Actor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>City Name</th>

                                        <th>Country</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cities as $item)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->country->country }}</td>






                                        <td>
                                            <a href="{{ url('/city/' . $item->city_id) }}" title="View Actor"><button class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/city/' . $item->city_id . '/edit') }}" title="Edit Actor"><button class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/city' . '/' . $item->city_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline-danger" title="Delete Actor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
