<!--

        This Page For mostafa samy
        Write Your Code Here

-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=s1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>IEEE-SHA</title>
        
       
    </head>
    <body>
     
        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
