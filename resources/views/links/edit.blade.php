<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Link') }}
            </h2>
            <a href="{{ route('links.index') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('links.update', $link->id) }}" class="flex flex-col items-start">
                    @csrf
                    @method('PUT')

                    <label class="dark:text-white" for="text">Text</label>
                    <input value="{{ $link->text }}" required type="text" id="text" name="text">

                    <label class="dark:text-white" for="url">URL</label>
                    <input value="{{ $link->url }}" required type="text" id="url" name="url">

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
                        class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700 text-white">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
