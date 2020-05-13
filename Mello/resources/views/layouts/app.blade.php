<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Mello')}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
        </style>
        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <div class="form-inline md-2">
                @include('inc.messages')
            </div>
            
            @yield('content')
        </div>
    </body>
</html>
