@if ($tool->questions->count() > 0)
<section id="questions" class="my-10">
    <h3 class="font-bold text-2xl text-gray-700">Questions it helps to answer</h3>
    <hr class="mb-2">
    <ul class="list-disc pl-8">
        @foreach ($tool->questions as $item)
        <li>{{ $item->question }}</li>
        @endforeach
    </ul>

</section>
@endif

@if ($tool->taxonomies->count() > 0)
<section id="taxonomies" class="my-10">
    <h3 class="font-bold text-2xl text-gray-700">Taxonomies</h3>
    <hr class="mb-2">
    @foreach ($tool->taxonomies as $tax)
    <span
        class="inline-block my-1 mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700 text-xs">{{ $tax->name }}</span>
    @endforeach
</section>
@endif

@if ($tool->attitudes->count() > 0)
<section id="attitudes" class="my-10">
    <h3 class="font-bold text-2xl text-gray-700">Attitudes</h3>
    <hr class="mb-2">
    @foreach ($tool->attitudes as $item)
    <span
        class="inline-block my-1 mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700 text-xs">{{ $item->name }}</span>
    @endforeach
</section>
@endif

@if ($tool->resources->count() > 0)
<section id="resources" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Resources</h3>
    <hr class="mb-2">
    @foreach ($tool->resources as $item)
    <span
        class="inline-block my-1 mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700 text-xs">{{ $item->name }}</span>
    @endforeach
</section>
@endif

@if ($tool->sources->count() > 0)
<section id="sources" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Sources</h3>
    <hr class="mb-2">
    <ul class="list-disc pl-8">
        @foreach ($tool->sources as $item)
        <li>
            {{ $item->title }}, by {{ $item->author }} (source type: {{ $item->type }})
        </li>
        @endforeach
    </ul>
</section>
@endif

@if ($tool->industries->count() > 0)
<section id="industries" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Industries</h3>
    <hr class="mb-2">
    @foreach ($tool->industries as $item)
    <span class="inline-block my-1 mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->name }}</span>
    @endforeach
</section>
@endif

@if ($tool->guides->count() > 0)
<section id="industries" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Guides</h3>
    <hr class="mb-2">
    <div class="grid grid-cols-3 gap-4">
        @foreach ($tool->guides as $item)
        <div class="max-w-sm rounded overflow-hidden shadow hover:shadow-lg">
            <img class="w-full" src="{{ asset($tool->image)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $item->name }}</div>
                <p class="text-gray-700 text-base">
                    {{ $item->description}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif

@if ($tool->videos->count() > 0)
<section id="videos" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Videos</h3>
    <hr class="mb-2">
    @foreach ($tool->videos as $item)
    <span class="inline-block my-1 mx-1 px-2 py-1 rounded-full bg-indigo-200 text-indigo-700">{{ $item->title }}</span>
    @endforeach
</section>
@endif

@if ($tool->files->count() > 0)
<section id="files" class="my-6">
    <h3 class="font-bold text-2xl text-gray-700">Files</h3>
    <hr class="mb-2">
    <ul>
        @foreach ($tool->files as $item)
        <li>
            <div class="grid grid-cols-5 gap-5">
                <div>
                    <a href="{{ route('file.show', $item)}}" class="">{{ $item->name }}</a>
                </div>
                <div>
                    {{ $item->version }}
                </div>
                <div>
                    {{ $item->type }}
                </div>
                <div>
                    {{ $item->lang }}
                </div>
                <div>
                    <a href="{{ asset($item->file) }}">Download</a>
                </div>
            </div>
        </li>

        @endforeach
    </ul>

</section>
@endif