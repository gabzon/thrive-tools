<div class="pt-4 pb-2">
    <div class="flex justify-between items-center mb-6">
        <h1 class="capitalize text-4xl font-semibold text-gray-600">{{ $title ? $title : $model .'s' }}</h1>

        <a href="{{ route( $model . '.create')}}"
            class="bg-indigo-700 py-2 px-3 rounded text-white hover:bg-indigo-800">Add {{ $model }}</a>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="w-full md:w-1/6 px-3">
            <div class="relative">
                <select
                    class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="perPage" wire:model="perPage">
                    <option value="10">10 - Per page</option>
                    <option value="15">15 - Per page</option>
                    <option value="25">25 - Per page</option>
                    <option value="50">50 - Per page</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
        <div class="hidden md:block md:w-2/6"></div>
        <div class="w-full md:w-3/6 px-3">
            <input wire:model="search" type="search" name="search" id="search"
                class="w-full mb-6 rounded-lg pl-2 h-12 border focus:bg-white" placeholder="Search...">
        </div>
    </div>

    <ul class="border rounded-lg overflow-hidden shadow">
        <li class="py-2 px-3 font-bold text-indigo-300 uppercase text-sm border-b bg-indigo-700">
            <div class="grid grid-cols-3 gap-5">
                <div><a role="button" wire:click.prevent="sortBy('name')" href="#">Name</a></div>
                <div>
                    <a role="button" wire:click.prevent="sortBy('description')" href="#">
                        @switch($model)
                        @case('source')
                        author
                        @break
                        @default
                        Description
                        @endswitch
                    </a>
                </div>
                <div></div>
            </div>
        </li>
        @forelse ($collection as $item)
        <li
            class="py-2 px-3 bg-white hover:bg-indigo-300 capitalize text-gray-800 hover:text-indigo-900 {{ $loop->last ? '': 'border-b'}}">
            <div class="grid grid-cols-3 gap-5">
                <div>
                    <a href="{{ route($model.'.show', $item) }}" class="hover:underline">
                        @switch($model)
                        @case('question')
                        {{ $item->question }}
                        @break
                        @case('video')
                        {{ $item->title }}
                        @break
                        @case('source')
                        {{ $item->title }}
                        @break
                        @default
                        {{ $item->name }}
                        @endswitch

                    </a>
                </div>
                <div>
                    @switch($model)
                    @case('source')
                    {{ $item->author }}
                    @break
                    @default
                    {{ Str::limit($item->description, 150) }}
                    @endswitch

                </div>
                <div class="flex justify-end items-center">
                    <a href="{{ route($model . '.edit', $item)}}"
                        class="hover:bg-indigo-700 rounded-full p-2 hover:text-white mx-1">
                        @include('icons.pen')
                    </a>
                    <form action="{{ route( $model . '.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="hover:bg-red-700 rounded-full p-2 hover:text-white" type="submit">
                            @include('icons.garbage')
                        </button>
                    </form>
                </div>
            </div>

        </li>
        @empty
        <li class="py-2 px-3 bg-white">No {{ $title }} found</li>
        @endforelse
    </ul>
    <div id="pagination" class="my-3">
        {{ $collection->links('livewire.pagination') }}
    </div>
</div>