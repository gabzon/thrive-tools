<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $tool->name }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            tool details.
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Slug
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->slug }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Tagline
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->tagline }}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Participants
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->participants }}
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Icon
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->icon }}
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Excerpt
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{-- {{$tool->excerpt}} --}}
                    @if ($tool->excerpt)
                    {!! GitDown::parseAndCache($tool->excerpt) !!}
                    @endif
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Description
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @if ($tool->description)
                    {!! GitDown::parseAndCache($tool->description) !!}
                    @endif
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Tips
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    @if ($tool->tips)
                    {!! GitDown::parseAndCache($tool->tips) !!}
                    @endif
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Duration
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->duration }} {{ $tool->duration_unit }}
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Author
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $tool->author->name }}
                </dd>
            </div>
        </dl>
    </div>
</div>