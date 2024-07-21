<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Trang chủ - Zaira')</title>

    @include('client.layouts.partials.css')
</head>

<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            @include('client.layouts.partials.header')
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer class="site-footer">
            @include('client.layouts.partials.footer')
        </footer>
    </div>

    @include('client.layouts.partials.js')

</body>

</html>
