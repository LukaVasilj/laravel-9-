@extends('city.layout')
@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
        }

        .card-body {
            padding: 20px;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .table {
            background-color: #ffffff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            transform: scale(1.05);
            background-color: #ffe1a6;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                        <a href="{{ url('actor') }}">Actor</a>
                        <br>
                        <a href="{{ url('country') }}">Countries</a>
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
                                                <a href="{{ url('/city/' . $item->city_id) }}" title="View Actor" class="btn btn-outline-info">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </a>
                                                <a href="{{ url('/city/' . $item->city_id . '/edit') }}" title="Edit Actor" class="btn btn-outline-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <button class="btn btn-outline-danger delete-btn" data-city-id="{{ $item->city_id }}" title="Delete Actor">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Ou1sd2e9BvtG58/MTb+AMelbz0Vm+ABj38MvzTgDd6cL5LrFOO2jBzK1lbbIlGS1" crossorigin="anonymous"></script>


                        <script>
                            $(document).ready(function() {
                                $('.delete-btn').on('click', function() {
                                    var cityId = $(this).data('city-id');
                                    confirmDelete(cityId);
                                });
                            });

                            function confirmDelete(cityId) {
                                Swal.fire({
                                    title: 'Confirm Delete',
                                    text: 'Are you sure you want to delete this city?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Delete',
                                    cancelButtonText: 'Cancel'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        deleteCity(cityId);
                                    }
                                });
                            }

                            function deleteCity(cityId) {
                                $.ajax({
                                    url: '/city/' + cityId,
                                    type: 'POST',
                                    data: {
                                        _method: 'DELETE',
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        location.reload();
                                    },
                                    error: function(xhr) {
                                        var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An error occurred';
                                        Swal.fire({
                                            title: 'Error',
                                            text: errorMessage,
                                            icon: 'error',
                                            confirmButtonText: 'OK'
                                        });
                                    }
                                });
                            }
                        </script>
@endsection
