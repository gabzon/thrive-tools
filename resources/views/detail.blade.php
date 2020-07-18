@extends('layouts.fullwidth')

@section('content')
<section class="pt-10">
    <div class="flex justify-center">
        <div class="max-w-3xl">
            <h1 class="text-6xl text-gray-700 text-center font-semibold">{{ $tool->name }}</h1>
            <img src="{{ asset($tool->image)}}" alt="{{ $tool->name }}" class="rounded-lg">
            <br>
            <section class="text-gray-700 mb-6">
                <h3 class="font-bold text-2xl">Tips</h3>
                <hr>
                <br>
                {!! $tool->tips !!}
            </section>

            <section>
                <h3 class="font-bold text-2xl text-gray-700">Tags</h3>
                <hr>
                <br>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">Amazing</span>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">Exciting</span>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">Flat</span>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">Big</span>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">Understanding</span>
                <span class="text-sm text-indigo-800 bg-indigo-200 px-2 py-1 rounded-full">blue</span>
            </section>
        </div>
    </div>
    <div class="container mx-auto py-10">

        @include('tool.details._card')

        <div class="flex justify-center my-10">
            <div class="border rounded-md p-5 shadow bg-white max-w-2xl">
                <h3 class="font-bold text-2xl text-gray-700">Tips</h3>
                <div class="text-gray-700">
                    {{-- {!! $tool->tips !!} --}}
                    {{-- {!! GitDown::parseAndCache($tool->tips) !!} --}}
                    {{-- {!! $tool->tipsToHTML() !!} --}}
                </div>
            </div>
        </div>



        <div class="px-6">
            Last update: {{ $tool->updated_at }}
            <br>
            <hr>
        </div>
    </div>
</section>
@endsection