<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Questions') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="questions" name="questions[]" multiple>
        @foreach (\App\Question::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasQuestion($item->id) ? 'selected' : '' }}>
            {{ $item->question }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Taxonomies') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="taxonomy" name="taxonomies[]" multiple>
        @foreach (\App\Taxonomy::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasTaxonomy($item->id) ? 'selected' : '' }}>{{ $item->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Phases') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="phases" name="phases[]" multiple>
        @foreach (\App\Phase::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasPhase($item->id) ? 'selected' : '' }}>{{ $item->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Attitudes') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="attitudes" name="attitudes[]" multiple>
        @foreach (\App\Attitude::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasAttitude($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Resources') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="resources" name="resources[]" multiple>
        @foreach (\App\Resource::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasResource($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Sources') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="sources" name="sources[]" multiple>
        @foreach (\App\Source::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasSource($item->id) ? 'selected' : '' }}>{{ $item->title }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Guides') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="guides" name="guides[]" multiple>
        @foreach (\App\Guide::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasGuide($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Industries') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="industries" name="industries[]" multiple>
        @foreach (\App\Industry::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasIndustry($item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Files') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="files" name="files[]" multiple>
        @foreach (\App\File::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasFile($item->id) ? 'selected' : '' }}>
            {{ $item->name }} ({{ $item->version }} | {{ $item->lang }})
        </option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Videos') }}
    </label>
    <select
        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="videos" name="videos[]" multiple>
        @foreach (\App\Video::all() as $item)
        <option value="{{ $item->id}}" {{ $tool->hasVideo($item->id) ? 'selected' : '' }}>{{ $item->title }}</option>
        @endforeach
    </select>
</div>