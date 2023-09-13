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
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('inc.header')
    <div class="container">
        <div class="aside">
            @include('inc.aside')
        </div>
        <div class="content">
            <div class="nav">
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('main') }}">Strona główna</a>
                </div>
                <div class="nav-item-two">
                    <a class="nav-link" href="{{ route('delivery.index') }}">Zamawiam do biura/domu</a>
                </div>

                <div class="nav-item">
                    <a class="nav-link" href="{{ route('inplace') }}">Zjem na miejscu</a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    @include('inc.footer')
</body>

</html>
