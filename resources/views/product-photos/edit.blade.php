<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Update Product Photo') }}
            </h2>
            <a href="{{ route('product-photos.index') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    @empty($productPhotos)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <form method="POST" enctype="multipart/form-data"
                        action="{{ route('product-photos.update', $productPhoto->id) }}" class="flex flex-col items-start">
                        @csrf
                        @method('PUT')
                        <input type="file" name="image">
                        <!-- Display general errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit"
                            class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700 text-white">Upload</button>
                    </form>
                    <img class="mt-2" src="{{ $productPhoto->url }}" alt="" srcset="">
                </div>
            </div>
        </div>
    @endempty

</x-app-layout>
