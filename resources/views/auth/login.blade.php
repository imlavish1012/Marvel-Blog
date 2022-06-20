@extends('layouts.app')
@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10" >
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words  sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg"
                style="background-color:white;">
                <!-- background -->
                 <div>
                    <img src="http://lofrev.net/wp-content/photos/2016/06/marvel-logo.jpg"style="width:150px; display: inline-flex;
             justify-content: center;
             flex-direction: column;
             margin-top:-21px;
             margin-left:80px;"alt="">
                <div class="font-semibold bg-white text-center sm:py-2 sm:px-2 sm:rounded-t-md"
                    style="font-size:50px; font-weight:400; color:red;font-family: 'Noto Sans', sans-serif; display: inline-flex; 
             justify-content: center;
             flex-direction: column;
             margin-left:5px;
             margin-top:15px;">
                    {{ __('Login') }}
                </div>
                </div>


                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-black text-sm font-bold mb-2 sm:mb-4"
                            style="font-size:15px; ">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input rounded-full w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-black text-sm font-bold mb-2 sm:mb-4"
                            style="font-size:15px;">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input rounded-full w-full @error('password') border-red-500 @enderror"
                            name="password" required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-black" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-black whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline  sm:py-4 zoom"
                            style="background-color:red; color:white;">
                            {{ __('Login') }}
                        </button>
                        <!-- button  -->
                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-black my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account? ") }}
                            <a class="text-red-500  no-underline hover:underline"
                                href="{{ route('register') }}">
                                {{ __(' Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection