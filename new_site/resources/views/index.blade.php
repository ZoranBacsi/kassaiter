<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kassai New Site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/nav.css" rel="stylesheet" type="text/css">

    </head>
    <body>
    @include('components.header')
    @include ('components.nav')
    <div class="container">
        @yield ('content')
    </div>
    @include ('components.footer')
    </body>
</html>
