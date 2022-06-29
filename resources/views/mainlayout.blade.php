<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.0.0-web/css/all.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.0.0-web/css/all.min.css') }}"> --}}
    <link rel="icon" href="{{ asset('img/logo-logo-removebg-preview.png') }}">





    @yield('page-level-css')

    <title>APPOINTMENT</title>
</head>

<body>

    @include('APPOINTMENT.homecontents.navbar')

    <div class="pt">
        @yield('contents')
    </div>

    @yield('page-level-js')

</body>

</html>
