<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $item->name }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    {{ $model }} details.
                </p>
            </div>
            <div>
                <dl>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->description }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Slug
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->slug }}
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Icon
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->icon }}
                        </dd>
                    </div>
                    @if ($model == 'industry')
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Sector
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->sector }}
                        </dd>
                    </div>
                    @endif
                    @if ($model == 'phase')
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Sector
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->sector }}
                        </dd>
                    </div>
                    @endif
                    @if ($model == 'resource')
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Affiliate URL
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $item->affiliate_url }}
                        </dd>
                    </div>
                    @endif
                </dl>
            </div>
        </div>
        <br>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Tools
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Tools associated with this {{ $model }}
                </p>
            </div>
            <div>
                <dl>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Tools
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">


                            <ul class="border border-gray-200 rounded-md">
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                    <div class="w-0 flex-1 flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate">
                                            resume_back_end_developer.pdf
                                        </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#"
                                            class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                            Download
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>











        <div class="my-5 flex justify-between items-center">
            <div>
                <a href="{{ url()->previous() }}" class="bg-gray-400 py-2 px-4 hover:bg-gray-500 rounded">Back</a>
            </div>
            <div class="inline-flex">
                <a href="{{ route($model . '.edit', $item->id )}}"
                    class="bg-indigo-700 py-2 px-4 hover:bg-indigo-800 rounded text-white">Edit</a>
                <form action="{{ route($model . '.destroy', $item->id )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-700 py-2 px-4 hover:bg-red-800 rounded text-white ml-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 px-3">
        <img src="{{ asset($item->image) }}" alt="" class="w-64">
    </div>
</div>