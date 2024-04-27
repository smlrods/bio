<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('New Link') }}
            </h2>
            <a href="{{ route('links.index') }}">
                <button class="btn btn-outline btn-error btn-sm">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="mt-3">
        <form method="POST" action="{{ route('links.store') }}" class="flex flex-col items-start">
            @csrf

            <div class="mb-2">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Text</span>
                    </div>
                    <x-text-input placeholder="Type Here" required type="text" id="text" name="text" />
                </label>
            </div>

            <div class="mb-2">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">URL</span>
                    </div>
                    <x-text-input placeholder="Type Here" required type="text" id="url" name="url" />
                </label>
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
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

</x-app-layout>
