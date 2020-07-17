<nav class="flex items-center justify-between flex-wrap bg-indigo-700 p-4 z-20 fixed top-0 inset-x-0 z-100">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="font-bold text-xl tracking-tight inline-flex items-center" href="{{ url('/') }}">
            @include('icons.thrive-logo') <span class="ml-2">{{ config('app.name', 'THRIVE') }}</span>
        </a>
    </div>
    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-indigo-200 border-purple-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header"
                class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4">
                Get Started
            </a>
            <a href="#responsive-header"
                class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-4">
                About
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white">
                Blog
            </a>
            <div class="md:hidden text-white">
                @include('layouts.navigation')
            </div>
        </div>
        <div>
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0">Home</a>

                @else
                <a href="{{ route('login') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</nav>

border-b border-gray-200 h-16 items-center