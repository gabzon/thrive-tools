@extends('layouts.app')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<form action="{{ route('video.update', $video) }}" method="post">
    @csrf
    @method('PUT')

    <div class="flex">
        <main class="flex-1 pl-4 pr-8 pt-4">
            <h1 class="capitalize text-3xl font-semibold text-gray-600 mb-5">Edit Video</h1>

            @include('video._form')

            <button type="submit"
                class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg mb-6">
                Edit Video
            </button>
        </main>

        <aside class="flex-initial border-l md:w-54 pt-4 min-h-screen">
        </aside>
    </div>
</form>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {            
        $("#tools").select2();
    });    
</script>
@endpush