<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="title">
            {{ __('Type') }}
        </label>
    </div>
    <div class="w-full md:w-2/12">
        <div class="relative">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('type') border-red-500 @enderror"
                id="type" name="type" required>
                <option selected disable>Select a sector</option>
                @isset($source->type)
                <option value="book" {{ $source->type == 'book' ? 'selected':'' }}>Primary</option>
                <option value="chapter" {{ $source->type == 'chapter' ? 'selected':'' }}>Secondary</option>
                <option value="article" {{ $source->type == 'article' ? 'selected':'' }}>Tertiary</option>
                <option value="newspaper" {{ $source->type == 'newspaper' ? 'selected':'' }}>Public</option>
                <option value="website" {{ $source->type == 'website' ? 'selected':'' }}>Public</option>
                <option value="conference" {{ $source->type == 'conference' ? 'selected':'' }}>Public</option>
                @else
                <option value="book">Primary</option>
                <option value="chapter">Secondary</option>
                <option value="article">Tertiary</option>
                <option value="newspaper">Public</option>
                <option value="website">Public</option>
                <option value="conference">Public</option>
                @endisset
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
        @error('type')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="title">
            {{ __('Title') }}
        </label>
    </div>
    <div class="md:w-11/12">
        <input id="title" type="text" name="title" value="{{ $source->title ?? old('value') }}" autocomplete="title"
            autofocus required
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('title') border-red-500 @enderror">
        @error('title')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="author">
            {{ __('Author') }}
        </label>
    </div>
    <div class="md:w-6/12">
        <input id="author" type="text" name="author" value="{{ $source->author ?? old('value') }}" autocomplete="author"
            autofocus required
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('author') border-red-500 @enderror">
        @error('author')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="w-full md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="location">
            {{ __('Location') }}
        </label>
    </div>
    <div class="w-full md:w-4/12">
        <input id="location" type="text" name="location" value="{{ $source->location ?? old('value') }}"
            autocomplete="location"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('Location') border-red-500 @enderror">
        @error('location')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="w-full md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="publisher">
            {{ __('publisher') }}
        </label>
    </div>
    <div class="w-full md:w-4/12">
        <input id="publisher" type="text" name="publisher" value="{{ $source->publisher ?? old('value') }}"
            autocomplete="publisher"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('publisher') border-red-500 @enderror">
        @error('publisher')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="year">
            {{ __('year') }}
        </label>
    </div>
    <div class="md:w-2/12">
        <input id="year" type="text" name="year" value="{{ $source->year ?? old('value') }}" autocomplete="year"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('year') border-red-500 @enderror">
        @error('year')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="number">
            {{ __('number') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="number" type="text" name="number" value="{{ $source->number ?? old('value') }}" autocomplete="number"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('number') border-red-500 @enderror">
        @error('number')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="pages">
            {{ __('Page(s)') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="pages" type="text" name="pages" value="{{ $source->pages ?? old('value') }}" autocomplete="pages"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('pages') border-red-500 @enderror">
        @error('pages')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="volume">
            {{ __('volume') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="volume" type="text" name="volume" value="{{ $source->volume ?? old('value') }}" autocomplete="volume"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('volume') border-red-500 @enderror">
        @error('volume')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="edition">
            {{ __('Edition') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="edition" type="text" name="edition" value="{{ $source->edition ?? old('value') }}"
            autocomplete="edition"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('edition') border-red-500 @enderror">
        @error('edition')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="isbn10">
            {{ __('ISBN10') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="isbn10" type="text" name="isbn10" value="{{ $source->isbn10 ?? old('value') }}" autocomplete="isbn10"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('isbn10') border-red-500 @enderror">
        @error('isbn10')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="isbn13">
            {{ __('ISBN13') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="isbn13" type="text" name="isbn13" value="{{ $source->isbn13 ?? old('value') }}" autocomplete="isbn13"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('isbn13') border-red-500 @enderror">
        @error('isbn13')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="chapter_title">
            {{ __('Chapter title') }}
        </label>
    </div>
    <div class="md:w-11/12">
        <input id="chapter_title" type="text" name="chapter_title" value="{{ $source->chapter_title ?? old('value') }}"
            autocomplete="chapter_title"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('chapter_title') border-red-500 @enderror">
        @error('chapter_title')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="affiliate_link">
            {{ __('Affiliate link') }}
        </label>
    </div>
    <div class="md:w-11/12">
        <input id="affiliate_link" type="text" name="affiliate_link"
            value="{{ $source->affiliate_link ?? old('value') }}" autocomplete="affiliate_link"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('affiliate_link') border-red-500 @enderror">
        @error('affiliate_link')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="url">
            {{ __('URL') }}
        </label>
    </div>
    <div class="md:w-11/12">
        <input id="url" type="text" name="url" value="{{ $source->url ?? old('value') }}" autocomplete="url"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('url') border-red-500 @enderror">
        @error('url')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="visited_on">
            {{ __('Visited on') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="visited_on" type="date" name="visited_on" value="{{ $source->visited_on ?? old('value') }}"
            autocomplete="visited_on"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('visited_on') border-red-500 @enderror">
        @error('visited_on')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="image">
            {{ __('Image') }}
        </label>
    </div>
    <div class="md:w-3/12">
        @if ($source->image)
        {{ $source->image }}
        @endif
        <input id="image" type="file" name="image" value="{{ $source->image ?? old('value') }}" autocomplete="image">
        @error('image')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>