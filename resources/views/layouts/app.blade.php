<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <header>
        @yield('header-section')
    </header>
    <main>
        @yield('main-section')
    </main>
    <footer>
        @yield('footer-section')
    </footer>

    @vite('resources/js/app.js')
</body>
</html>