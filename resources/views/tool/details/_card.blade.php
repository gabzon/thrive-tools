<div class="card bg-white rounded-lg overflow-hidden shadow-lg mx-3">
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto ">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8"></div>

                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2
                            class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            {{ $tool->name }}
                            <br class="xl:hidden" />
                            {{-- <span class="text-purple-600"> $tool->tagline </span> --}}
                        </h2>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            {{ $tool->description }}
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Download
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                {{-- <a href="#"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-purple-700 bg-purple-100 hover:text-purple-600 hover:bg-purple-50 focus:outline-none focus:shadow-outline focus:border-purple-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    View
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <br>
                    <nav class="relative flex items-center justify-center sm:h-10 lg:justify-start">
                        <div class="md:block md:pr-4">
                            <span
                                class="font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center">
                                @include('icons.clock')
                                <span class="ml-2">{{ $tool->duration }} {{ $tool->duration_unit }}</span>
                            </span>
                            <span
                                class="ml-8 font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center">
                                @include('icons.people')
                                <span class="ml-2">{{ $tool->participants }}</span>
                            </span>
                            <span
                                class="ml-8 font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center hover:text-purple-700">
                                <svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset($tool->image) }}"
                alt="{{ $tool->slug }}" />
        </div>
    </div>
</div>