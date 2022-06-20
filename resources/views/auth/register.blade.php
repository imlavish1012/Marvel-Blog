@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg"
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
                    {{ __('Register') }}
                </div>
                </div>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline  sm:py-4 zoom"style="background-color:red; color:white;">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-red-500 hover:text-black no-underline hover:underline " href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
