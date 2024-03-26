<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Aplicación</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
        
    </body>
</html>
