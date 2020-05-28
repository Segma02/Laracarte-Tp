<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>{{page_title($title)}}</title>

    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }

    </style>
</head>
<body>
    @include('layouts.partials/_nav')
    @yield('content')
    @include('layouts.partials/_footer')
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
    @stack('content-js')
</body>
</html>