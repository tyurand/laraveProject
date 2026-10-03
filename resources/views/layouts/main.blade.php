<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv="X-UA-Compatidle" content="ie=edge">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body>

    <header>
        <div class="container header-inner">
            <a href="/" class="logo">TYR-IT</a>

            <nav>
                <a href="{{route('home')}}">Главная</a>
                <a href="{{route('about')}}" >О нас</a>
                <a href="{{route('contact')}}">Контакты</a>
            </nav>

        </div>
    </header>

    @yield('content')


</body>

    <footer>
        <p>© 2026 TYR-IT. Все права защищены.</p>
    </footer>
</html>