@extends('layouts.app')
@section('content')

<article class="w-full max-w-screen-lg mx-auto px-6" id="{{ $tool->name }}">
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
            <br>
            @include('tool.details.relations')
            <br>
            <div class="my-10 flex justify-between items-center">
                <div>
                    <a href="{{ url()->previous() }}" class="bg-gray-400 py-2 px-4 hover:bg-gray-500 rounded">Back</a>
                </div>
                <div class="inline-flex">
                    <a href="{{ route('tool.edit', $tool )}}"
                        class="bg-indigo-700 py-2 px-4 hover:bg-indigo-800 rounded text-white">Edit</a>
                    <form action="{{ route('tool.destroy', $tool )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-700 py-2 px-4 hover:bg-red-800 rounded text-white ml-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="md:w-1/3 px-3">
            <div class="sticky top-0 self-start pt-20">
                @include('tool.details._sidecard')
            </div>
        </div>
    </div>
</article>
@endsection