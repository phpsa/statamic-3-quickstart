<header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
    <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="{{config('app.name', 'Laravel')}} home" class="inline-flex items-center">
                <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{config('app.name', 'Laravel')}} logo" />

                <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">
                    {{config('app.name', 'Laravel')}}</h1>
            </a>
        </div>
        <div class="flex flex-1 justify-end items-center">
            <nav class="hidden lg:flex items-center justify-end text-lg">
                @include('partials.nav_top_items')
                @guest
                <a class="ml-6 text-gray-700 hover:text-blue-600" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                <a class="ml-6 text-gray-700 hover:text-blue-600"
                    href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                <a href="{{ route('logout') }}" class="ml-6 text-gray-700 hover:text-blue-600" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
                @endguest
            </nav>

            <button
                class="flex justify-center items-center bg-blue-500 border border-blue-500 h-10 px-5 rounded-full lg:hidden focus:outline-none"
                onclick="navMenu.toggle()">
                <svg id="js-nav-menu-show" xmlns="http://www.w3.org/2000/svg" class="fill-current text-white h-9 w-4"
                    viewBox="0 0 32 32">
                    <path
                        d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                </svg>

                <svg id="js-nav-menu-hide" xmlns="http://www.w3.org/2000/svg"
                    class="hidden fill-current text-white h-9 w-4" viewBox="0 0 36 30">
                    <polygon
                        points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 " />
                </svg>
            </button>


        </div>
    </div>
</header>
@include('partials.nav.top_responsive')


@push('scripts')
<script>
    const navMenu = {
                    toggle() {
                        const menu = document.getElementById('js-nav-menu');
                        menu.classList.toggle('hidden');
                        menu.classList.toggle('lg:block');
                        document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
                        document.getElementById('js-nav-menu-show').classList.toggle('hidden');
                    },
                }
</script>
@endpush
