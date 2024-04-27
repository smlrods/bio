<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Customize Page') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('customize.update') }}" class="">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Title Color</span>
                </div>
                <input value="{{ $theme->title_color }}" type="color" id="title_color" name="title_color" />
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Divisor Color</span>
                </div>
                <input value="{{ $theme->divisor_color }}" type="color" id="divisor_color" name="divisor_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Testimonial Stars
                        Color</span>
                </div>
                <input value="{{ $theme->testimonial_stars_color }}" type="color" id="testimonial_stars_color"
                    name="testimonial_stars_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Testimonial Color</span>
                </div>
                <input value="{{ $theme->testimonial_color }}" type="color" id="testimonial_color"
                    name="testimonial_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Testimonial Author
                        Color</span>
                </div>
                <input value="{{ $theme->testimonial_author_color }}" type="color" id="testimonial_author_color"
                    name="testimonial_author_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Link Border Color</span>
                </div>
                <input value="{{ $theme->link_border_color }}" type="color" id="link_border_color"
                    name="link_border_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Link Text Color</span>
                </div>
                <input value="{{ $theme->link_text_color }}" type="color" id="link_text_color" name="link_text_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Link Text Hover
                        Color</span>
                </div>
                <input value="{{ $theme->link_text_hover_color }}" type="color" id="link_text_hover_color"
                    name="link_text_hover_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Link Background
                        Color</span>
                </div>
                <input value="{{ $theme->link_background_color }}" type="color" id="link_background_color"
                    name="link_background_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Link Background
                        Hover Color</span>
                </div>
                <input value="{{ $theme->link_background_hover_color }}" type="color"
                    id="link_background_hover_color" name="link_background_hover_color">
            </label>
        </div>

        <div class="mb-2">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Page Background
                        Color</span>
                </div>
                <input value="{{ $theme->page_background_color }}" type="color" id="page_background_color"
                    name="page_background_color">
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
</x-app-layout>
