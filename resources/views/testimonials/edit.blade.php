<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Edit Testimonial') }}
            </h2>
            <a href="{{ route('testimonials.index') }}">
                <button class="btn btn-error btn-sm btn-outline">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="mt-3">
        <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}"
            class="flex flex-col items-start">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Author</span>
                    </div>
                    <x-text-input value="{{ $testimonial->author }}" required placeholder="Type Here" type="text"
                        id="author" name="author" />
                </label>
            </div>

            <div class="mb-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Text</span>
                    </div>
                    <textarea required maxlength="255" class="textarea textarea-bordered h-24" placeholder="Type Here" name="text"
                        id="text">{{ $testimonial->text }}</textarea>
                </label>
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</x-app-layout>
