<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="name">
        {{ __('Name') }}
    </label>
    <input id="name" type="text" name="name" value="{{ old('value') }}" required autocomplete="name" autofocus
        wire:model="name"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('name') border-red-500 @enderror">
    @error('name')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <div class="md:w-1/12">
        <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="name">
            {{ __('Tagline') }}
        </label>
    </div>
    <input id="tagline" type="text" name="tagline" value="{{ old('value') }}" autocomplete="tagline" autofocus
        wire:model="tagline"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('tagline') border-red-500 @enderror">
    @error('tagline')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="duration">
        {{ __('excerpt') }}
    </label>
    <textarea name="excerpt" id="excerpt" cols="30" rows="3" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
    focus:outline-none">{{ old('value') }}</textarea>
</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="tips">
        {{ __('Tips') }}
    </label>
    <textarea name="tips" id="tips" cols="30" rows="5" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
        focus:outline-none" wire:model="tips">{{ old('value') }}</textarea>

</div>

<div class="mb-6" wire:ignore>
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Description') }}
    </label>
    <textarea name="description" id="description" cols="30" rows="10" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
    focus:outline-none" wire:model="description">{{ old('value') }}</textarea>
</div>


<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="icon">
        {{ __('Icon') }}
    </label>
    <input id="icon" type="text" name="icon" value="{{ old('value') }}" autocomplete="icon" autofocus wire:model="icon"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('icon') border-red-500 @enderror">
    @error('icon')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="participants">
        {{ __('Participants') }}
    </label>
    <input id="participants" type="text" name="participants" value="{{ old('value') }}" autocomplete="participants"
        autofocus wire:model="participants"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('participants') border-red-500 @enderror">
    @error('participants')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="duration">
        {{ __('Duration') }}
    </label>
    <div class="flex">
        <input id="duration" type="text" name="duration" value="{{ old('value') }}" autocomplete="duration" autofocus
            wire:model="duration"
            class="bg-white h-12 mr-1 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('duration') border-red-500 @enderror">
        @error('duration')
        <span class="text-sm text-red-600 italic" role="alert">
            {{ $message }}
        </span>
        @enderror
        <div class="relative ml-1">
            <select
                class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="duration_unit" wire:model="duration_unit" name="duration_unit">
                <option selected disabled value="">Unit</option>
                <option value="seconds">Seconds</option>
                <option value="minutes">Minutes</option>
                <option value="hour">Hour</option>
                <option value="hours">Hours</option>
                <option value="day">Day</option>
                <option value="days">Days</option>
                <option value="week">Week</option>
                <option value="weeks">Weeks</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Cover image') }}
    </label>
    <input type="file" name="image" id="image" wire:model="image">
    <img src="{{ asset($image) }}" alt="">
    @error('image')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>