<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

    </head>
    <body>
    <div>
        @foreach($hasil as $value)

            @endforeach
    </div>
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/regis.js') }}"></script>
</html>
