<!DOCTYPE html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../imagenes/favicon.png">
        <title>{{ config('app.name', 'Project Tracing') }}</title>

        @yield('links')

</head>

<body class="@yield('centrado')">

        @yield('content')
        
</body>
        @yield('scripts')
</html>