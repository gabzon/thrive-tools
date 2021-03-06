@extends('layouts.app')

@section('content')

<div class="flex justify-center h-screen">
    <div class="w-full md:w-1/3 py-10 mx-3">
        <h3 class="text-center text-xl mb-6 font-bold text-gray-600">{{ __('Login') }}</h3>

        <form class="w-full max-w-lg" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="email">
                        {{ __('E-Mail Address') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('email') border-red-500 @enderror">
                    @error('email')
                    <span class="text-sm text-red-600 italic" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="password">
                        {{ __('Password') }}
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('password') border-red-500 @enderror"
                        id="password" type="password" name="password" placeholder="************" autocomplete="password"
                        required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-600">
                    <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <span class="text-sm">
                        {{ __('Remember Me') }}
                    </span>
                </label>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-indigo-700 hover:bg-indigo-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="ml-5 text-gray-600 hover:text-indigo-600" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>

    </div>
</div>

@endsection