<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Sanctum App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
</head>

<body class="antialiased">

    <div class="flex-center position-ref full-height" id="app">
        <secret-component></secret-component>
    </div>

    <script defer src="{{ url(mix('js/app.js')) }}"></script>
</body>

</html>
