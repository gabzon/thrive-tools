<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Relations
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            tool details.
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Taxonomies
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->taxonomies as $tax)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $tax->name }}</span>
                    @endforeach
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Attitudes
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->attitudes as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->name }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Resources
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->resources as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->name }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Sources
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->sources as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->title }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Industries
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->industries as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->name }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Questions
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->questions as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->question }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Videos
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{-- {{ $tool->videos }} --}}
                    @foreach ($tool->videos as $item)
                    <span class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->title }}</span>
                    @endforeach
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Files
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @foreach ($tool->files as $item)
                    <a href="{{ route('file.show', $item)}}"
                        class="mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700 hover:bg-indigo-700 hover:text-white">{{ $item->name }}</a>
                    @endforeach
                </dd>
            </div>
        </dl>
    </div>
</div>