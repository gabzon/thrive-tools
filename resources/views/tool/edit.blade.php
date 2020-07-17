@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<form action="{{ route('tool.update', $tool) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">

        </div>
        <div class="md:w-11/12">
            <h1 class="capitalize text-3xl font-semibold text-gray-600">Edit Tool</h1>
        </div>
    </div>


    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
                {{ __('Name') }}
            </label>
        </div>
        <div class="md:w-6/12">
            <input id="name" type="text" name="name" value="{{ $tool->name ?? old('value') }}" required
                autocomplete="name" autofocus wire:model="name"
                class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('name') border-red-500 @enderror">
            @error('name')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="tagline">
                {{ __('Tagline') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <input id="tagline" type="text" name="tagline" value="{{ $tool->tagline ?? old('value') }}"
                autocomplete="tagline" autofocus wire:model="tagline"
                class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('tagline') border-red-500 @enderror">
            @error('tagline')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="duration">
                {{ __('excerpt') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <textarea name="excerpt" id="excerpt" cols="30" rows="3" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
                    focus:outline-none" wire:model="excerpt">{{ $tool->excerpt ?? old('value') }}</textarea>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="tips">
                {{ __('Tips') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <textarea name="tips" id="tips" cols="30" rows="5" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
                focus:outline-none" wire:model="tips">{{ $tool->tips ?? old('value') }}</textarea>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Description') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <textarea name="description" id="description" cols="30" rows="10" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
                focus:outline-none" wire:model="description">{{ $tool->description ?? old('value') }}</textarea>
        </div>
    </div>


    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="icon">
                {{ __('Icon') }}
            </label>
        </div>
        <div class="md:w-3/12">
            <input id="icon" type="text" name="icon" value="{{ $tool->icon ?? old('value') }}" autocomplete="icon"
                autofocus wire:model="icon"
                class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('icon') border-red-500 @enderror">
            @error('icon')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="participants">
                {{ __('Participants') }}
            </label>
        </div>
        <div class="md:w-3/12">
            <input id="participants" type="text" name="participants" value="{{ $tool->participants ?? old('value') }}"
                required autocomplete="participants" autofocus wire:model="participants"
                class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('participants') border-red-500 @enderror">
            @error('participants')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="duration">
                {{ __('Duration') }}
            </label>
        </div>
        <div class="md:w-3/12">
            <input id="duration" type="text" name="duration" value="{{ $tool->duration ?? old('value') }}" required
                autocomplete="duration" autofocus wire:model="duration"
                class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('duration') border-red-500 @enderror">
            @error('duration')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="duration">
                {{ __('Duration unit') }}
            </label>
        </div>
        <div class="md:w-3/12">
            <div class="relative">
                <select
                    class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="duration_unit" wire:model="duration_unit" name="duration_unit">
                    <option selected disabled></option>
                    <option value="seconds" {{ $tool->duration_unit == 'seconds' ? 'selected' : '' }}>Seconds</option>
                    <option value="minutes" {{ $tool->duration_unit == 'minutes' ? 'selected' : '' }}>Minutes</option>
                    <option value="hour" {{ $tool->duration_unit == 'hour' ? 'selected' : '' }}>Hour</option>
                    <option value="hours" {{ $tool->duration_unit == 'hours' ? 'selected' : '' }}>Hours</option>
                    <option value="day" {{ $tool->duration_unit == 'day' ? 'selected' : '' }}>Day</option>
                    <option value="days" {{ $tool->duration_unit == 'days' ? 'selected' : '' }}>Days</option>
                    <option value="week" {{ $tool->duration_unit == 'week' ? 'selected' : '' }}>Week</option>
                    <option value="weeks" {{ $tool->duration_unit == 'weeks' ? 'selected' : '' }}>Weeks</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Cover image') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <input type="file" name="image" id="image" wire:model="image">
            @error('image')
            <span class="text-sm text-red-600 italic" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
    </div>


    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Taxonomies') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="taxonomy" wire:model="taxonomies" name="taxonomies[]" multiple>
                @foreach (\App\Taxonomy::all() as $tax)
                <option value="{{ $tax->id}}">{{ $tax->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Attitudes') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="attitudes" wire:model="attitudes" name="attitudes[]" multiple>
                @foreach (\App\Attitude::all() as $item)
                <option value="{{ $item->id}}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Resources') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="resources" wire:model="resources" name="resources[]" multiple>
                @foreach (\App\Resource::all() as $item)
                <option value="{{ $item->id}}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="md:flex md:items-top mb-6">
        <div class="md:w-1/12">
            <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="description">
                {{ __('Sources') }}
            </label>
        </div>
        <div class="md:w-11/12">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="sources" wire:model="sources" name="sources[]" multiple>
                @foreach (\App\Source::all() as $item)
                <option value="{{ $item->id}}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/12">

        </div>
        <div class="md:w-11/12">
            <button type="submit" class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg">
                Edit tool
            </button>
        </div>
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
        $("#taxonomy").select2();
        $("#attitudes").select2({});   
        $("#resources").select2({});   
        $("#sources").select2({});   
    });
    var excerptMDE = new SimpleMDE({ element: document.getElementById("excerpt") });
    var tipsMDE = new SimpleMDE({ element: document.getElementById("tips") });
    var descriptionMDE = new SimpleMDE({ element: document.getElementById("description") });
</script>
@endpush