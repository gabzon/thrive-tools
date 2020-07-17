{{-- name: string:100 nullable --}}
{{-- version: string:10 nullable --}}
{{-- author: string:100 nullable --}}


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
            {{ __('Name') }}
        </label>
    </div>
    <div class="md:w-6/12">
        <input id="name" type="text" name="name" value="{{ $file->name ?? old('value') }}" required autocomplete="name"
            autofocus
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
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="author">
            {{ __('Author') }}
        </label>
    </div>
    <div class="md:w-6/12">
        <input id="author" type="text" name="author" value="{{ $file->author ?? old('value') }}" required
            autocomplete="author" autofocus
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('author') border-red-500 @enderror">
        @error('author')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="version">
            {{ __('Version') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <input id="version" type="text" name="version" value="{{ $file->version ?? old('value') }}" required
            autocomplete="version" autofocus
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('version') border-red-500 @enderror">
        @error('version')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
            {{ __('Type') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <div class="relative">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="type" name="type" required>
                <option selected disable>Select a type</option>
                @isset($file->type)
                <option value="pdf" {{ $file->type == 'pdf' ? 'selected':'' }}>PDF</option>
                <option value="example" {{ $file->type == 'example' ? 'selected':'' }}>Example</option>
                <option value="kit" {{ $file->type == 'kit' ? 'selected':'' }}>Kit</option>
                @else
                <option value="pdf">PDF</option>
                <option value="example">Example</option>
                <option value="kit">Kit</option>
                @endisset
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
    </div>
</div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="lang">
            {{ __('Language') }}
        </label>
    </div>
    <div class="md:w-3/12">
        <div class="relative">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="lang" name="lang" required>
                <option selected disable>Select a language</option>
                @isset($file->lang)
                <option value="en" {{ $file->lang == 'en' ? 'selected':'' }}>English</option>
                <option value="fr" {{ $file->lang == 'fr' ? 'selected':'' }}>Français</option>
                <option value="es" {{ $file->lang == 'es' ? 'selected':'' }}>Spanish</option>
                <option value="pt" {{ $file->lang == 'pt' ? 'selected':'' }}>Portuguese</option>
                <option value="it" {{ $file->lang == 'it' ? 'selected':'' }}>Italian</option>
                <option value="hr" {{ $file->lang == 'hr' ? 'selected':'' }}>Croatian</option>
                <option value="de" {{ $file->lang == 'de' ? 'selected':'' }}>German</option>
                <option value="ja" {{ $file->lang == 'ja' ? 'selected':'' }}>Japanese</option>
                <option value="nl" {{ $file->lang == 'nl' ? 'selected':'' }}>German</option>
                <option value="cn" {{ $file->lang == 'cn' ? 'selected':'' }}>Chinese</option>
                <option value="rs" {{ $file->lang == 'rs' ? 'selected':'' }}>Rusian</option>
                @else
                <option value="en">English</option>
                <option value="fr">Français</option>
                <option value="es">Spanish</option>
                <option value="pt">Portuguese</option>
                <option value="it">Italian</option>
                <option value="hr">Croatian</option>
                <option value="de">German</option>
                <option value="ja">Japanese</option>
                <option value="nl">German</option>
                <option value="cn">Chinese</option>
                <option value="rs">Rusian</option>
                @endisset
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
    </div>
</div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="file">
            {{ __('File') }}
        </label>
    </div>
    <div class="md:w-6/12">
        @isset($file->file)
        {{ $file->file }}
        @endisset
        <input id="file" type="file" name="file" value="{{ $file->file ?? old('value') }}">
        @error('file')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>