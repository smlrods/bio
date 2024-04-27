<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Testimonials') }}
            </h2>
            <a href="{{ route('testimonials.create') }}">
                <button class="btn btn-primary btn-sm btn-outline">Create</button>
            </a>
        </div>
    </x-slot>

    <div class="flex flex-col gap-3 mt-3">
        @if (!empty($testimonials->toArray()))
            @foreach ($testimonials as $testimonial)
                <div class="bg-base-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <a class="block dark:text-white p-3" href="{{ route('testimonials.show', $testimonial->id) }}">
                        {{ $testimonial->text }}
                    </a>
                </div>
            @endforeach
        @else
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('No Testimonials Yet!') }}
                </div>
            </div>
        @endif
    </div>

</x-app-layout>
