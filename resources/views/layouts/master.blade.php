<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Laravel @yield('title')</title>
</head>
<body>
    @section('header')
        MASTER HEADER
    @show
    <div class="container"> 
        @yield('content')
    </div>

    @section('footer')
        MASTER FOOTER
    @show
</body>
</html>