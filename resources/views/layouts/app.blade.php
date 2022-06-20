<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->

   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <style>
@import url('https://fonts.googleapis.com/css2?family=Anek+Malayalam&family=Noto+Sans:wght@600&family=Open+Sans&family=Poppins:wght@600&family=Roboto+Condensed:wght@700&family=Roboto:wght@500&display=swap');

.zoom {
  transition: transform .2s;
}

.zoom:hover {
  transform: scale(1.1);
  color:red;
}


.red:hover{
    color: red;

}
</style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-black py-3">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="" class="text-lg font-semibold text-gray-400 hover:text-gray-100 no-underline">
                        Marvel's World
                    </a>
                </div>
                <nav class="space-x-10 text-gray-300 text-sm sm:text-base">
                  <a class="no-underline text-gray-400 hover:text-gray-100" href="/myblogproject/public/">Home</a>
                    <a class="no-underline text-gray-400 hover:text-gray-100" href="/myblogproject/public/blog">Blog</a>
                    @guest
                        <a class="no-underline text-gray-400 hover:text-gray-100" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline text-gray-400 hover:text-gray-100" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="no-underline text-gray-100 px-2 py-2 font-bold rounded-full">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline text-gray-400 hover:text-gray-100"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <div>
           @yield('content')
        </div>
        <div>
          @include('layouts.footer')
        </div>
    </div>
</body>
</html>
