@extends('layouts.app')
@section('content')
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3">
        <br>
        @include('tool.details.fields')
        <div class="my-5 flex justify-between items-center">
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
    <div class="w-full md:w-1/2 px-3">
        <br>
        @if ($tool->image)
        <img src="{{ asset($tool->image) }}" alt="" class="mb-6 w-full rounded-lg mb-8">
        @endif
        @include('tool.details.relations')
    </div>
</div>



@endsection