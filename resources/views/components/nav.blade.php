<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset('storage/'.$accueil->logo)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{\Request::route()->getName()=='welcome'?'active':''}}"><a href="{{route('welcome')}}">Home</a>
            </li>
            <li class="{{\Request::route()->getName()=='services'?'active':''}}"><a
                    href="{{route('services')}}">Services</a></li>
            <li class="{{\Request::route()->getName()=='blog'?'active':''}}"><a href="{{route('blog')}}">Blog</a></li>
            <li class="{{\Request::route()->getName()=='contact'?'active':''}}"><a
                    href="{{route('contact')}}">Contact</a></li>
            @guest
            <li>
                <a href="{{route('login')}}">Login/Register</a>
            </li>
            @else
            @can('admin',App\User::class)
            <li>
                <a href="{{route('home')}}">Back Office</a>
            </li>
            @endcan
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Log Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </nav>
</header>
