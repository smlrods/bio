<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl">
                {{ __('New Product Photo') }}
            </h2>
            <a href="{{ route('product-photos.index') }}">
                <button class="btn btn-sm btn-outline btn-error">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="mt-3">
        <form method="POST" enctype="multipart/form-data" action="{{ route('product-photos.store') }}"
            class="flex flex-col items-start">
            @csrf
            <div class="mb-3">
                <input class="file-input file-input-bordered w-full max-w-xs" type="file" name="image">
            </div>
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
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</x-app-layout>
