<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Testimonial') }}
            </h2>
            <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700">
                <button class="text-white">Edit</button>
            </a>
            <form method="POST" action="{{ route('testimonials.destroy', $testimonial->id) }}">
                @csrf
                @method('DELETE')
                <button class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700 text-white" type="submit">Delete</button>
            </form>
        </div>
    </x-slot>

    @empty($productPhotos)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
                <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="mb-4">
                        <h2 class="text-xl dark:text-white font-bold">Author:</h2>
                        <p class="dark:text-white">{{ $testimonial->author }}</p>
                    </div>
                    <div>
                        <h2 class="text-xl dark:text-white font-bold">Text:</h2>
                        <p class="dark:text-white">{{ $testimonial->text }}</p>

                    </div>
                </div>
            </div>
        </div>
    @endempty

</x-app-layout>
