<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>天気予報アプリ</title>
        <body>
            <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <div id="app">
            <example-component v-bind:weather='@json($weather)'></example-component>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
        </body>
    </head>
</html>