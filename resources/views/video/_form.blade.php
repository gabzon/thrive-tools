<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="title">
        {{ __('Title') }}
    </label>
    <input id="title" type="text" name="title" autocomplete="title" autofocus
        value="@isset($video->title) {{ $video->title ?? old('value') }} @endisset" required
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('title') border-red-500 @enderror">
    @error('title')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="title">
        {{ __('URL') }}
    </label>

    <input id="url" type="text" name="url" value="@isset($video->url) {{ $video->url ?? old('value') }} @endisset"
        autocomplete="url"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('url') border-red-500 @enderror">
    @error('url')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="embed">
        {{ __('Embed') }}
    </label>
    <textarea name="embed" id="embed" cols="30" rows="5"
        class="bg-white rounded-lg w-full p-3">@isset($video->embed) {{ $video->embed ?? old('value') }} @endisset</textarea>
    @error('embed')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="tool">
        {{ __('Tools') }}
    </label>
    <select
        class="block appearance-none md:w-64 h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="tool" name="tool">
        <option selected disabled>Select Tool</option>
        @foreach (\App\Tool::all() as $item)

        @isset($video)
        <option value="{{ $item->id }}" {{ $item->hasVideo($video->id) ? 'selected' : '' }}>{{ $item->name }}</option>
        @else
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endisset

        @endforeach
    </select>
</div>