@extends('layouts.app')

@section('content')
<div class="max-w-3xl pt-4">
    <h1 class="text-4xl text-gray-700 mb-3">{{ $video->title }}</h1>
    <p>{!! $video->embed !!}</p>
    <p class="text-gray-700"><span class="font-semibold">URL: </span>{{ $video->url}}</p>
    <p class="text-gray-700"><span class="font-semibold">Tool: </span>{{ $video->tool->name}}</p>

    <div class="my-5 flex justify-between items-center">
        <div>
            <a href="{{ url()->previous() }}" class="bg-gray-400 py-2 px-4 hover:bg-gray-500 rounded">Back</a>
        </div>
        <div class="inline-flex">
            <a href="{{ route('video.edit', $video->id )}}"
                class="bg-indigo-700 py-2 px-4 hover:bg-indigo-800 rounded text-white">Edit</a>
            <form action="{{ route('video.destroy', $video->id )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-700 py-2 px-4 hover:bg-red-800 rounded text-white ml-2">Delete</button>
            </form>
        </div>
    </div>
</div>

@endsection