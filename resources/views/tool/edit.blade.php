@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<form action="{{ route('tool.update', $tool) }}" method="post" enctype="multipart/form-data" class="mt-4">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <h1 class="capitalize text-3xl font-semibold text-gray-600">Edit Tool</h1>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full md:w-1/2 px-3">
            @include('tool.edit._fields')
        </div>
        <div class="w-full md:w-1/2 px-3">
            @include('tool.edit._relationships')
        </div>
    </div>

    <div class="mb-6">
        <button type="submit" class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg">
            Edit tool
        </button>
    </div>
</form>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    $(document).ready(function() {    
        $("#questions").select2({});
        $("#taxonomy").select2();
        $("#phases").select2({});
        $("#attitudes").select2({});   
        $("#resources").select2({});   
        $("#sources").select2({});                
        $("#guides").select2({});
        $("#industries").select2({});        
        $("#files").select2({});
        $("#videos").select2({});
    });    
    var tipsMDE = new SimpleMDE({ element: document.getElementById("tips") });
    var descriptionMDE = new SimpleMDE({ element: document.getElementById("description") });
</script>
@endpush