<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="name">
        {{ __('Name') }}
    </label>
    <input id="name" type="text" name="name" value="{{ $tool->name ?? old('value') }}" required autocomplete="name"
        autofocus wire:model="name"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('name') border-red-500 @enderror">
    @error('name')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="tagline">
        {{ __('Tagline') }}
    </label>
    <input id="tagline" type="text" name="tagline" value="{{ $tool->tagline ?? old('value') }}" autocomplete="tagline"
        autofocus wire:model="tagline"
        class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('tagline') border-red-500 @enderror">
    @error('tagline')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="duration">
        {{ __('excerpt') }}
    </label>
    <textarea name="excerpt" id="excerpt" cols="30" rows="3" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
    focus:outline-none">{{ $tool->excerpt ?? old('value') }}</textarea>
</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="tips">
        {{ __('Tips') }}
    </label>
    <textarea name="tips" id="tips" cols="30" rows="5" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
            focus:outline-none" wire:model="tips">{{ $tool->tips ?? old('value') }}</textarea>

</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Description') }}
    </label>
    <textarea name="description" id="description" cols="30" rows="10" class="w-full rounded focus:border-indigo-500 appearance-none border border-gray-300 py-2 px-4 text-gray-700 leading-tight
            focus:outline-none" wire:model="description">{{ $tool->description ?? old('value') }}</textarea>
</div>


<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="icon">
        {{ __('Icon') }}
    </label>
    <input id="icon" type="text" name="icon" value="{{ $tool->icon ?? old('value') }}" autocomplete="icon" autofocus
        wire:model="icon"
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
    <input id="participants" type="text" name="participants" value="{{ $tool->participants ?? old('value') }}" required
        autocomplete="participants" autofocus wire:model="participants"
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
        <input id="duration" type="text" name="duration" value="{{ $tool->duration ?? old('value') }}" required
            autocomplete="duration" autofocus wire:model="duration"
            class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('duration') border-red-500 @enderror">
        <div class="relative w-full ml-3">
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

    @error('duration')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror

</div>

<div class="mb-6">
    <label class="block text-gray-600 mb-1 md:mb-0 pr-4" for="description">
        {{ __('Cover image') }}
    </label>
    <input type="file" name="image" id="image">
    @if ($tool->image)
    <img src="{{ asset($tool->image) }}" alt="{{ $tool->name }}" class="rounded-md mt-3">
    @endif
    @error('image')
    <span class="text-sm text-red-600 italic" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>