<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"> <title>@yield('title')</title>

    <title>@yield('title')</title>
</head>
<body>
    @section('navbar')
        @include('shared.navbar')
    @show
    <div>
        @yield('content')
    </div>
    <div>
        @yield('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>