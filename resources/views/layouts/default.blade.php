<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
    </head>
    <body>
    @include('partials._alert')
    @yield('content')
    </body>
</html>