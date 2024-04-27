<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Links') }}
            </h2>
            <a href="{{ route('links.create') }}">
                <button class="btn btn-outline btn-primary btn-sm">Create</button>
            </a>
        </div>
    </x-slot>

    <div class="mt-3 max-w-sm flex flex-col gap-2">
        @if (!empty($links->toArray()))
            @foreach ($links as $link)
                <div class="bg-base-200 overflow-hidden shadow-sm rounded-box">
                    <a class="block p-3" href="{{ route('links.show', $link->id) }}">
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

</x-app-layout>
