<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Testimonial') }}
            </h2>
            <a href="{{ route('testimonials.index') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}"
                    class="flex flex-col items-start">
                    @csrf
                    @method('PUT')

                    <label class="dark:text-white" for="author">Author</label>
                    <input value="{{ $testimonial->author }}" required type="text" id="author" name="author">

                    <label class="dark:text-white" for="text">Text</label>
                    <textarea required maxlength="255" name="text" id="text" cols="30" rows="10">{{ $testimonial->text }}</textarea>

                    <!-- Display general errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger dark:text-white">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit"
                        class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700 text-white">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
