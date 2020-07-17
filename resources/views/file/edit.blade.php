@extends('layouts.app')

@section('content')
<form action="{{ route('file.update', $file) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">

        </div>
        <div class="md:w-11/12">
            <h1 class="capitalize text-3xl font-semibold text-gray-600">Edit File</h1>
        </div>
    </div>

    @include('file._form')

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">

        </div>
        <div class="md:w-11/12">
            <button type="submit" class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg">
                Edit File
            </button>
        </div>
    </div>
</form>
@endsection