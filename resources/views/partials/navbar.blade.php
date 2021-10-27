<ul>

            @guest
            <li><a href="{{route('login')}}">Login</a></li>

            <li><a href="{{route('register')}}">Register</a></li>

            <li><a href="{{route('build.create')}}">Contact</a></li>

            @endguest

            @auth
            
             

            @endauth

            
        </ul>