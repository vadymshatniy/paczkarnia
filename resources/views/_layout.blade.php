<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    @include('inc.header')
    <div class="container">
        <div class="aside">
            @include('inc.aside')
        </div>
        <div class="main-content">
            <div class="nav">
                <ul class="nav-list">
                    <li class="nav-list-item">
                        <a class="nav-list-button" href="{{ route('main') }}">Strona główna</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-button" href="{{ route('delivery.index') }}">Zamawiam do odbioru/dostawy</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-button" href="{{ route('inplace') }}">Zjem na miejscu</a>
                    </li>
                </ul>
            </div>
            @yield('content')
        </div>
    </div>
    @include('inc.footer')
    @stack('adminCSSscript')
</body>

</html>
