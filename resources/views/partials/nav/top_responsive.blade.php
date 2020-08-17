<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        {{-- <li class="pl-4">
            <a title="{{config('app.name', 'Laravel')}} Blog" href="/blog"
        class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}">Blog</a>
        </li>
        <li class="pl-4">
            <a title="{{config('app.name', 'Laravel')}} About" href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}">About</a>
        </li>
        <li class="pl-4">
            <a title="{{config('app.name', 'Laravel')}} Contact" href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}">Contact</a>
        </li>
        --}}
        @include('partials.nav.top_responseive_items')



        @guest
        <li class="pl-4">
            <a class="nav-menu__item hover:text-blue-500" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="pl-4">
            <a class="nav-menu__item hover:text-blue-500" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else

        <li class="pl-4">
            <a href="{{ route('logout') }}" class="nav-menu__item hover:text-blue-500" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        </li>
        @endguest
    </ul>
</nav>
