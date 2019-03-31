<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Coin Locker</title>

        <!-- vuetifyCSS -->
        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    </head>

    <body>
        <div id="app"></div>

        <script src="{{ asset(mix('js/app.js')) }}"></script>
        
    </body>
    
</html>
