 <!DOCTYPE html>
<html>
<head>
<title>Proyecto Laravel</title>
</head>

<body>
    <p>
        <a href="\">Home</a>
        <a href="\blog">Blog</a>
        
        @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
        @else
            <a href="{{route('login')}}">Login</a>
        @endauth
    </p>
    <hr>
    
    @yield('content')
</body>

</html> 




