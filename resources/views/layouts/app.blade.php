<html>
<head>
    <title>Menus - @yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Request::is('photos') ? 'active' : '' }}"><a href="{{ route('photos') }}">Photos</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Activity completed by Alejandro Andre Gonzalez Flores.</p>
    </footer>
</body>
</html>
