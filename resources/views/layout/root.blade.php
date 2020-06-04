<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css')}}">        
        <link rel="stylesheet" href="{{ asset('css/datatables/datatables.min.css')}}">        
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @yield('content-body')
            </div>
        </div>


        <!-- jQuery -->    
        <script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
        <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}" ></script>
        <script src="{{ asset('js/datatables/datatables.min.js') }}" ></script>
        <script src="{{ asset('js/app.js') }}" ></script>            

        @yield('js')
    </body>
</html>
