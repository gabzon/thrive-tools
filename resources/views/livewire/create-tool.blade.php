@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

<div class="pt-4">
    <form action="action=" {{ route('tool.store') }}" method="post" wire:submit.prevent="store"
        enctype="multipart/form-data">



        <div class="flex">
            <div class="flex-1 pr-5">
                <h1 class="capitalize text-3xl font-semibold text-gray-600 mb-6">Add Tool</h1>
                @include('tool._form')
            </div>
            <div class="w-2/5">
                <div class="border-l w-2/6 fixed right-0">
                    <div class="px-5">
                        @include('tool._relationships')
                    </div>
                </div>
            </div>
        </div>

        <button type="submit"
            class="capitalize bg-indigo-700 text-white px-3 py-2 hover:bg-indigo-800 rounded-lg mb-10">
            Add tool
        </button>

    </form>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    var excerptMDE = new SimpleMDE({ element: document.getElementById("excerpt") });
    var tipsMDE = new SimpleMDE({ element: document.getElementById("tips") });
    var descriptionMDE = new SimpleMDE({ element: document.getElementById("description") }); 
 
    excerptMDE.codemirror.on("change", function(){	    
        @this.set('excerpt', excerptMDE.value());
    });

    tipsMDE.codemirror.on("change", function(){	    
        @this.set('tips', tipsMDE.value());
    });

    descriptionMDE.codemirror.on("change", function(){	    
        @this.set('description', descriptionMDE.value());
    });

    $(document).ready(function() {            
        $("#taxonomy").select2();
        $('#taxonomy').on('change', function (e) {            
            var data = $('#taxonomy').select2("val");        
            @this.set('taxonomies', data);
        });

        $("#attitudes").select2();                     
        $('#attitudes').on('change', function (e) {            
            var data = $('#attitudes').select2("val");        
            @this.set('attitudes', data);
        });

        $("#sources").select2();                     
        $('#sources').on('change', function (e) {            
            var data = $('#sources').select2("val");        
            @this.set('sources', data);
        });

        $("#industries").select2();                     
        $('#industries').on('change', function (e) {            
            var data = $('#industries').select2("val");        
            @this.set('industries', data);
        });

        $("#questions").select2();                     
        $('#questions').on('change', function (e) {            
            var data = $('#questions').select2("val");        
            @this.set('questions', data);
        });

        $("#resources").select2();                     
        $('#resources').on('change', function (e) {            
            var data = $('#resources').select2("val");        
            @this.set('resources', data);
        });

        $("#phases").select2();                     
        $('#phases').on('change', function (e) {            
            var data = $('#phases').select2("val");        
            @this.set('phases', data);
        });

        $("#files").select2();                     
        $('#files').on('change', function (e) {            
            var data = $('#files').select2("val");        
            @this.set('files', data);
        });

        $("#videos").select2();                     
        $('#videos').on('change', function (e) {            
            var data = $('#videos').select2("val");        
            @this.set('videos', data);
        });

    });    
</script>


@endpush