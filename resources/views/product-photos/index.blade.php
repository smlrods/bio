<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Product Photos') }}
            </h2>
            <a href="{{ route('product-photos.create') }}" class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700">
                <button class="text-white">Create</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (!empty($productPhotos->toArray()))
                    <div class="grid grid-cols-3 gap-3">
                        @foreach ($productPhotos as $productPhoto)
                            <a class="block aspect-square" href="{{ route('product-photos.show', $productPhoto->id) }}">
                                <img class="object-cover w-full h-full object-center" src="{{ $productPhoto->url }}"
                                    alt="Product Photo - {{ $productPhoto->id }}">
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('No Products Photos Yet!') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
