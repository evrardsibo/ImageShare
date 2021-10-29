<nav>

            @guest
            <a href="{{route('login')}}">Login</a>

            <a href="{{route('register')}}">Register</a>

            <a href="{{route('build.create')}}">Contact</a>

            @endguest

            @auth
            
             

            @endauth

            
</nav>