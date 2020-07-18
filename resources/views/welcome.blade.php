@extends('layouts.fullwidth')
@section('content')

<section class="container mx-auto my-12">
    <div class="flex flex-wrap">
        @foreach ($tools as $t)
        <div class="w-full md:w-1/3 my-2">
            <div class="max-w-sm rounded-lg overflow-hidden bg-gray-100 hover:shadow-lg">

                <img class="w-full" src="{{ asset( $t->image)}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $t->name}}</div>
                    <p class="text-gray-700 text-base">
                        {{ $t->description }}
                    </p>
                </div>
                <div class="px-6 pt-2 py-5">
                    <a href="{{ route('detail', $t) }}"
                        class="bg-transparent hover:bg-indigo-500 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-700 hover:border-transparent rounded">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection