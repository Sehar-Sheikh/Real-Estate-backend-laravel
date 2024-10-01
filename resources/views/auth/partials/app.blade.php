<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <title>Dream Home Real Estate</title>
</head>

<body style="min-height: 100vh; background: linear-gradient(to bottom, #f0fdfa, #c6f6d5); color: #1a202c;">

    @include('auth.partials.navbar')

    @yield('content')

    @include('auth.partials.footer')

</body>

</html>
