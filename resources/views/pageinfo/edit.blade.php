<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Edit Page Information') }}
            </h2>
        </div>
    </x-slot>

    <form method="POST" enctype="multipart/form-data" action="{{ route('pageinfo.update') }}" class="h-full">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">TITLE</span>
                </div>
                <x-text-input placeholder="Type Here" value="{{ $pageInfo->title }}" type="text" id="title"
                    name="title" />
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">DESCRIPTION</span>
                </div>
                <x-text-input placeholder="Type Here" value="{{ $pageInfo->description }}" type="text"
                    id="description" name="description" />
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">LOGO</span>
                </div>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" id="logo"
                    name="logo" />
            </label>

            @if ($pageInfo->logo_url)
                <div class="avatar my-5 -z-10">
                    <div class="w-24 rounded-full">
                        <img src="{{ $pageInfo->logo_url }}" alt="Logo">
                    </div>
                </div>
            @endif
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

</x-app-layout>
