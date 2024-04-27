<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Link') }}
            </h2>
            <a href="{{ route('links.edit', $link->id) }}">
                <button class="btn btn-outline btn-primary btn-sm">Edit</button>
            </a>
            <form method="POST" action="{{ route('links.destroy', $link->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline btn-error btn-sm" type="submit">Delete</button>
            </form>
        </div>
    </x-slot>

    <div class="mt-3">
        <div class="mb-4">
            <h2 class="text-lg dark:text-white font-bold">Text:</h2>
            <p class="dark:text-white">{{ $link->text }}</p>
        </div>
        <div>
            <h2 class="text-lg dark:text-white font-bold">URL:</h2>
            <p class="dark:text-white">{{ $link->url }}</p>

        </div>
    </div>

</x-app-layout>
