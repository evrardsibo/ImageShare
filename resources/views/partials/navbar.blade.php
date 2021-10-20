<ul>

            @guest
            <li><a href="{{route('login')}}">Login</a></li>

            <li><a href="{{route('register')}}">Register</a></li>

            @endguest

            @auth
            
            <li><a href="{{route('build.create')}}">Contact</a></li> 

            @endauth

            
        </ul>