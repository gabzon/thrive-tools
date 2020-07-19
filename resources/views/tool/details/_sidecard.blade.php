<div class="bg-white border overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $tool->name }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Details of use
        </p>
    </div>
    <div>
        <dl>
            <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500 text-right">
                    <span
                        class="font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center">
                        @include('icons.clock') <span class="ml-2">Duration</span>
                    </span>
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->duration }} {{ $tool->duration_unit }}
                </dd>
            </div>
            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    <span
                        class="font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center">
                        @include('icons.people') <span class="ml-2">People</span>
                    </span>
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->participants }}
                </dd>
            </div>
            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    <span
                        class="font-medium text-gray-500 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out inline-flex items-center">
                        @include('icons.phase') <span class="ml-2">Phases</span>
                    </span>
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->phases as $item)
                    {{ $item->name }} {{ $loop->last ? '':','}}
                    @endforeach
                </dd>
            </div>
        </dl>
        <div class="w-full p-3">
            @if ($download->file )
            <a href="{{ asset($download->file) }}"
                class="bg-indigo-700 hover:bg-indigo-800 text-white w-full block text-center py-2 rounded-md">
                Download
            </a>
            @endif
        </div>
    </div>
</div>