<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
            }

            .navbar {
                background: linear-gradient(to right, #667eea, #764ba2);
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .navbar h2 {
                margin: 0;
                font-weight: 600;
                color: #fff;
            }

            .navbar a {
                color: #fff;
                text-decoration: none;
                margin-right: 10px;
                transition: color 0.3s ease;
                padding: 10px 15px;
                border-radius: 5px;
                background-color: #764ba2;
                cursor: pointer;
                position: relative;
                overflow: hidden;
            }

            .navbar a:hover {
                color: #fff;
                background-color: #5e3a84;
            }

            .navbar a::before {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 0;
                height: 0;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.2);
                opacity: 0;
                transition: width 0.3s ease, height 0.3s ease, opacity 0.3s ease;
            }

            .navbar a:hover::before {
                width: 300px;
                height: 300px;
                opacity: 1;
            }

            .card-header {
                padding: 20px;
                text-align: center;
                background: linear-gradient(to right, #764ba2, #667eea);
                color: #fff;
            }

            .card-header a {
                display: inline-block;
                font-size: 24px;
                margin: 10px;
                padding: 15px 30px;
                border-radius: 10px;
                background-color: #764ba2;
                color: #fff;
                text-decoration: none;
                position: relative;
                overflow: hidden;
            }

            .card-header a::before {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 0;
                height: 0;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.2);
                opacity: 0;
                transition: width 0.3s ease, height 0.3s ease, opacity 0.3s ease;
            }

            .card-header a:hover::before {
                width: 300px;
                height: 300px;
                opacity: 1;
            }

            .card-header a:hover::after {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 0;
                height: 0;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.2);
                opacity: 0;
                transition: width 0.3s ease, height 0.3s ease, opacity 0.3s ease;
            }

            .card-header a:hover::after {
                width: 400px;
                height: 400px;
                opacity: 0;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <h2>Laravel 9 Crud Sakila</h2>
            <div>
                <a href="{{ url('actor') }}">Actor</a>
                <a href="{{ url('city') }}">City</a>
                <a href="{{ url('country') }}">Country</a>
            </div>
        </div>

        <div class="card-header">
            <h2>Laravel 9 Crud Sakila</h2>
            <a href="{{ url('actor') }}">Actor</a><br>
            <a href="{{ url('city') }}">City</a><br>
            <a href="{{ url('country') }}">Country</a>
        </div>
    </body>
</html>

