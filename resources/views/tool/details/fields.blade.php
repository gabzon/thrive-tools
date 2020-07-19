@if ($tool->excerpt)
<section id="excerpt" class="mb-10">
    <p>{{ $tool->excerpt }}</p>
</section>
@endif


<section id="description" class="mb-10">
    <h3 class="font-bold text-2xl text-gray-700">Description</h3>
    <hr class="mb-2">
    <p>
        @if ($tool->description)
        {!! GitDown::parseAndCache($tool->description) !!}
        @endif
    </p>
</section>

<section id="tips" class="mb-10">
    <h3 class="font-bold text-2xl text-gray-700">Tips</h3>
    <hr class="mb-2">
    <p>
        @if ($tool->tips)
        {!! GitDown::parseAndCache($tool->tips) !!}
        @endif
    </p>
</section>