@if (session()->has('success'))
<div class="mt-4" x-data="{ open: true }" x-show="open">
    <!--Header Alert-->
    <div class="alert-banner w-full">
        <label
            class="close cursor-pointer flex items-center justify-between w-full py-4 px-3 bg-green-400 rounded text-white font-bold capitalize"
            title="close" for="banneralert">
            {{ session()->get('success') }}
            <button type="button" @click="open = false">
                x
            </button>
        </label>
    </div>
</div>
@endif