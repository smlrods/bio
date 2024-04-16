<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('New Testimonial') }}
            </h2>
            <a href="{{ route('testimonials.index') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('testimonials.store') }}"
                    class="flex flex-col items-start">
                    @csrf

                    <label class="dark:text-white" for="author">Author</label>
                    <input required type="text" id="author" name="author">

                    <label class="dark:text-white" for="text">Text</label>
                    <textarea required maxlength="255" name="text" id="text" cols="30" rows="10"></textarea>

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
                        class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700 text-white">Create</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
