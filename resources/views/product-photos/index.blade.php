<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Product Photos') }}
            </h2>
            <a href="{{ route('product-photos.create') }}">
                <button class="btn btn-primary btn-sm btn-outline">Create</button>
            </a>
        </div>
    </x-slot>

    <div class="mt-3">
        @if (!empty($productPhotos->toArray()))
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-3">
                @foreach ($productPhotos as $productPhoto)
                    <a class="block aspect-square" href="{{ route('product-photos.show', $productPhoto->id) }}">
                        <img class="object-cover w-full h-full rounded-box object-center" src="{{ $productPhoto->url }}"
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

</x-app-layout>
