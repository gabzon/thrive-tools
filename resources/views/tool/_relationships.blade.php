<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Taxonomy') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="taxonomy" name="taxonomies[]" multiple>
        @foreach (\App\Taxonomy::all() as $tax)
        <option value="{{ $tax->id}}">{{ $tax->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Attitudes') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="attitudes" name="attitudes[]" multiple>
        @foreach (\App\Attitude::all() as $item)
        <option value="{{ $item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Sources') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="sources" name="sources[]" multiple>
        @foreach (\App\Source::all() as $item)
        <option value="{{ $item->id}}">{{ $item->title }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Industries') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="industries" name="industries[]" multiple>
        @foreach (\App\Industry::all() as $item)
        <option value="{{ $item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Questions') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="questions" name="questions[]" multiple>
        @foreach (\App\Question::all() as $item)
        <option value="{{ $item->id}}">{{ $item->question }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <div class="md:w-1/12">
        <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
            {{ __('Resources') }}
        </label>
    </div>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="resources" name="resources[]" multiple>
        @foreach (\App\Resource::all() as $item)
        <option value="{{ $item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <div class="md:w-1/12">
        <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
            {{ __('Phases') }}
        </label>
    </div>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="phases" name="phases[]" multiple>
        @foreach (\App\Phase::all() as $item)
        <option value="{{ $item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <div class="md:w-1/12">
        <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
            {{ __('Files') }}
        </label>
    </div>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="files" name="files[]" multiple>
        @foreach (\App\File::all() as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6" wire:ignore>
    <label class="block w-full text-gray-600 mb-1 md:mb-0 pr-4" for="videos">
        {{ __('Videos') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="videos" name="videos[]" multiple>
        @foreach (\App\Video::all() as $item)
        <option value="{{ $item }}">{{ $item->title }}</option>
        @endforeach
    </select>
</div>