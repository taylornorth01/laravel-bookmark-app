<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 1.2rem;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .nostyle {
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            @yield ('content')
        </div>
    </body>
</html>
