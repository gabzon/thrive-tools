@extends('layouts.fullwidth')

@section('content')
<article class="w-full max-w-screen-lg mx-auto px-6 my-10" id="{{ $tool->name }}">
    <header>
        <h1 class="text-6xl text-gray-700 text-center font-semibold">{{ $tool->name }}</h1>
        <h2 class="text-2xl text-gray-700 text-center mb-3">{{ $tool->tagline }}</h2>
        <img src="{{ asset($tool->image) }}" alt="{{ $tool->name }}" class="rounded-lg">
        <div class="flex justify-between">
            <div class="text-xs text-gray-600">
                Published by: {{ $tool->author->name }}
            </div>
            <div class="text-xs text-gray-600">
                Updated: {{ $tool->updated_at->format('d-m-y') }}
            </div>
        </div>
    </header>

    <div class="flex flex-wrap min-h-screen -mx-3">
        <div class="md:w-2/3 pt-20 px-3">
            @include('tool.details.fields')

            @include('tool.details.relations')
        </div>
        <div class="md:w-1/3 px-3">
            <div class="sticky top-0 self-start pt-20">
                @include('tool.details._sidecard')
            </div>
        </div>
    </div>
</article>
@endsection