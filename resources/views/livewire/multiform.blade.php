<div>
    <form action="{{ route($model . '.store') }}" method="post" wire:submit.prevent="create">
        @csrf

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">

            </div>
            <div class="md:w-11/12">
                <h1 class="capitalize text-3xl font-semibold text-gray-600">{{ $title }}</h1>
            </div>
        </div>


        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="name">
                    {{ __('Name') }}
                </label>
            </div>
            <div class="md:w-11/12">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name"
                    autofocus wire:model="name"
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
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="slug">
                    {{ __('Slug') }}
                </label>
            </div>
            <div class="md:w-11/12">
                <input wire:model="slug" id="slug" type="text" name="slug" value="{{ old('name') }}" disabled
                    class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('slug') border-red-500 @enderror">
                @error('slug')
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

                <textarea wire:model="description" name="description" id="description" cols="30" rows="10"
                    class="bg-white rounded-lg w-full"></textarea>
                @error('description')
                <span class="text-sm text-red-600 italic" role="alert">
                    {{ $message }}
                </span>
                @enderror
                {{-- <div id="description" name="name" class="bg-white"></div> --}}
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="icon">
                    {{ __('Icon') }}
                </label>
            </div>
            <div class="md:w-3/12">
                <input id="icon" type="text" name="icon" value="{{ old('icon') }}" autocomplete="icon" wire:model="icon"
                    class="bg-white h-12 appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
            </div>
        </div>

        <div class="md:flex md:items-top mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="icon">
                    {{ __('Image') }}
                </label>
            </div>
            <div class="md:w-11/12">
                <input id="image" type="file" name="image" value="{{ old('image') }}" autocomplete="image" autofocus
                    wire:model="image">
                {{-- wire:change="$emit('chooseFile')"> --}}
                {{-- {{ $image }} --}}
                {{-- <img src="{{ asset($image) }}" alt="" class="{{ $image ? 'h-40 mt-5': 'hidden' }}"> --}}
            </div>
        </div>



        @if ( $model === 'phase' )
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="icon">
                    {{ __('Select color') }}
                </label>
            </div>
            <div class="md:w-3/12">
                <input id="color" data-jscolor="" name="color" value="{{ old('color') }}" autocomplete="color"
                    wire:model="color"
                    class="bg-white appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
            </div>
        </div>
        @endif

        @if ($model === 'industry')
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="icon">
                    {{ __('Sector') }}
                </label>
            </div>
            <div class="md:w-3/12">
                <div class="relative">
                    <select
                        class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="sector" wire:model="sector">
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                        <option value="tertiary">Tertiary</option>
                        <option value="public">Public</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($model === 'resource')
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">
                <label class="block text-gray-600 md:text-right mb-1 md:mb-0 pr-4" for="affiliate_url">
                    {{ __('Affiliate url') }}
                </label>
            </div>
            <div class="md:w-11/12">
                <input id="affiliate_url" type="text" name="affiliate_url" value="{{ old('affiliate_url') }}"
                    autocomplete="affiliate_url" wire:model="affiliate_ur"
                    class="bg-white appearance-none border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500 @error('affiliate_url') border-red-500 @enderror">
            </div>
        </div>
        @endif


        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/12">

            </div>
            <div class="md:w-11/12">
                <button type="submit"
                    class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg">
                    Add {{ $model }}
                </button>
            </div>
        </div>

    </form>
</div>

@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.2.3/jscolor.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
<script>
    // $('#description').summernote({      
    //   tabsize: 2,
    //   height: 120,
    //   toolbar: [
    //     ['style', ['style']],
    //     ['font', ['bold', 'underline', 'clear']],
    //     ['color', ['color']],
    //     ['para', ['ul', 'ol', 'paragraph']],
    //     ['table', ['table']],
    //     ['insert', ['link', 'picture', 'video']],
    //     ['view', ['fullscreen', 'codeview', 'help']]
    //   ]      
    // });


    
jscolor.presets.default = {
    height: 181,              // make the picker box a little bigger
    position: 'right',        // position the picker to the right of the target
    previewPosition: 'right', // display color preview on the right side
    previewSize: 40,          // make color preview bigger
};

// window.livewire.on('chooseFile', () => {
//     let inputField = document.getElementById('image');
//     let file = inputField.files[0];
//     console.log(inputField.files[0]);
//     let reader = new FileReader();
//     reader.onloadend = () => {
//         window.livewire.emit('fileUpload', reader.result);        
//     }
//     reader.readAsDataURL(file);
//     alert('A post was added with the id of: ');
// })
</script>
@endsection

{{-- Attitude, Guide, Industry, Phase, Taxonomy, Resource: --}}
{{-- Attitude, Phase:
color: string nullable --}}