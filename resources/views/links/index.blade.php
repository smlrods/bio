<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Links') }}
            </h2>
            <a href="{{ route('links.create') }}" class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700">
                <button class="text-white">Create</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            @if (!empty($links->toArray()))
                @foreach ($links as $link)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <a class="block dark:text-white p-3" href="{{ route('links.show', $link->id) }}">
                            {{ $link->text }}
                        </a>
                    </div>
                @endforeach
            @else
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('No Link Yet!') }}
                    </div>
                </div>
            @endif
        </div>
    </div>

</x-app-layout>
