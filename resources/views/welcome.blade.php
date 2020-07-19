@extends('layouts.fullwidth')
@section('content')

<section class="container mx-auto my-12">

    <form action="{{ route('welcome') }}" method="get">
        <input class="w-full border bg-white mt-5 border-gray-400 py-3 px-4 leading-tight appearance-none block focus:outline-none
        focus:border-indigo-600 mb-8 rounded" type="search" name="search" placeholder="Search tools..."
            value="{{ request()->query('search') }}" list="tools">
        <datalist id="tools">
            @foreach (\App\Tool::all() as $item)
            <option value="{{$item->name}}"></option>
            @endforeach
        </datalist>
    </form>

    <section id="filters" class="bg-indigo-500 rounded-md px-3 py-2 my-6">
        <form action="{{ route('welcome') }}" method="get">
            <div class="grid grid-cols-3 gap-5">
                <div class="w-full">
                    <select name="taxonomy" id="taxonomy" class="h-10 w-full">
                        <option selected disabled>Select Category</option>
                        @foreach (\App\Taxonomy::all() as $item)
                        <option value="{{ $item->id }}" {{ request()->taxonomy == $item->id ? 'selected' : ''}}>
                            {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select name="phase" id="phase" class="h-10 w-full">
                        <option value selected disabled>Select Phase</option>
                        @foreach (\App\Phase::all() as $item)
                        <option value="{{ $item->id }}" {{ request()->phase == $item->id ? 'selected' : ''}}>
                            {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="h-10 bg-indigo-700 py-2 px-4 rounded text-indigo-100 hover:bg-indigo-800 inline-flex items-center">
                        @include('icons.filter')
                        <span class="ml-2">Filter</span>
                    </button>
                    <a href="{{ route('welcome') }}"
                        class="h-10 bg-indigo-700 py-2 px-4 rounded text-indigo-100 hover:bg-indigo-800 inline-flex items-center ml-2">Clear</a>
                </div>
            </div>
        </form>
    </section>

    <div class="flex flex-wrap -mx-3">
        @foreach ($tools as $t)
        <div class="w-full md:w-1/3 my-2 px-3">
            <div class="rounded-lg overflow-hidden bg-gray-100 hover:shadow-lg mb-3">
                <img class="w-full" src="{{ asset( $t->image)}}" alt="{{ $item->name }}">
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

    <div class="mt-2">
        {{ $tools->links() }}
    </div>
</section>

@endsection