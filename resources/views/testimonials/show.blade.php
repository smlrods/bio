<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Testimonial') }}
            </h2>
            <a href="{{ route('testimonials.edit', $testimonial->id) }}">
                <button class="btn btn-primary btn-outline btn-sm">Edit</button>
            </a>
            <form method="POST" action="{{ route('testimonials.destroy', $testimonial->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline btn-error btn-sm" type="submit">Delete</button>
            </form>
        </div>
    </x-slot>

    <div class="mt-3">
        <div class="mb-3">
            <h2 class="text-lg font-bold">Author:</h2>
            <p>{{ $testimonial->author }}</p>
        </div>
        <div>
            <h2 class="text-lg font-bold">Text:</h2>
            <p>{{ $testimonial->text }}</p>

        </div>
    </div>

</x-app-layout>
