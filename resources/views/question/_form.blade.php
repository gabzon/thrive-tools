<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
            {{ __('Question') }}
        </label>
    </div>
    <div class="md:w-11/12">
        <input id="question" type="text" name="question" value="{{ $question->question ?? old('name') }}" required
            autocomplete="question" autofocus
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('question') border-red-500 @enderror">
        @error('question')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>

<div class="md:flex md:items-top mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
            {{ __('Description') }}
        </label>
    </div>
    <div class="md:w-11/12">
        {{-- @trix(\App\Industry::class, 'description', [ 'class' => 'bg-red-800' ]) --}}

        <textarea name="description" id="description" cols="30" rows="10"
            class="bg-white rounded-lg w-full p-3">{{ $question->description ?? old('value') }}</textarea>
        @error('description')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
        {{-- <div id="description" name="name" class="bg-white"></div> --}}
    </div>
</div>