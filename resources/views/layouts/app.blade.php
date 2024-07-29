<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory Management')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container max-w-screen-lg mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>
