@extends('layouts.app')

@section('content')
<form action="{{ route('question.update', $question) }}" method="post">
    @csrf
    @method('PUT')

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">

        </div>
        <div class="md:w-11/12">
            <h1 class="capitalize text-3xl font-semibold text-gray-600">Edit question</h1>
        </div>
    </div>

    @include('question._form')

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12"></div>
        <div class="md:w-11/12">
            <a href="{{ url()->previous() }}" class="bg-gray-400 py-2 px-4 hover:bg-gray-500 rounded mr-2">Back</a>
            <button type="submit" class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg">
                Edit Question
            </button>
        </div>
    </div>

</form>
@endsection