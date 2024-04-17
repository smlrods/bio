<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Page Information') }}
            </h2>
            <a href="{{ route('pageinfo.edit') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" enctype="multipart/form-data" action="{{ route('pageinfo.update') }}"
                    class="flex flex-col items-start">
                    @csrf
                    @method('PUT')

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="title">Title</label>
                        <input value="{{ $pageInfo->title }}" type="text" id="title" name="title">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="description">Description</label>
                        <input value="{{ $pageInfo->description }}" type="text" id="description" name="description">
                    </div>

                    <div class="mb-2">
                        @if ($pageInfo->logo_url)
                            <img class="w-30 h-auto" src="{{ $pageInfo->logo_url }}" alt="Logo">
                        @endif
                        <label class="dark:text-white block text-xl" for="logo">Logo</label>
                        <input type="file" id="logo" name="logo" class="dark:text-white">
                    </div>

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
