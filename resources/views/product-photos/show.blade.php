<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Product Photo ' . $productPhoto->id) }}
            </h2>
            <a href="{{ route('product-photos.edit', $productPhoto->id) }}">
                <button class="btn btn-primary btn-sm btn-outline">Edit</button>
            </a>
            <form method="POST" action="{{ route('product-photos.destroy', $productPhoto->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-outline btn-error" type="submit">Delete</button>
            </form>
        </div>
    </x-slot>

    @empty($productPhotos)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img class="w-full h-auto" src="{{ $productPhoto->url }}" alt="" srcset="">
                </div>
            </div>
        </div>
    @endempty

</x-app-layout>
