<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Customize Page') }}
            </h2>
            <a href="{{ route('pageinfo.edit') }}" class="px-3 py-2 bg-red-500 mt-2 hover:bg-red-700">
                <button class="text-white">Cancel</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('customize.update') }}" class="flex flex-col items-start">
                    @csrf
                    @method('PUT')

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="title_color">Title Color</label>
                        <input value="{{ $theme->title_color }}" type="color" id="title_color" name="title_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="description_color">Description Color</label>
                        <input value="{{ $theme->description_color }}" type="color" id="description_color"
                            name="description_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="divisor_color">Divisor Color</label>
                        <input value="{{ $theme->divisor_color }}" type="color" id="divisor_color"
                            name="divisor_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="testimonial_stars_color">Testimonial Stars
                            Color</label>
                        <input value="{{ $theme->testimonial_stars_color }}" type="color" id="testimonial_stars_color"
                            name="testimonial_stars_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="testimonial_color">Testimonial Color</label>
                        <input value="{{ $theme->testimonial_color }}" type="color" id="testimonial_color"
                            name="testimonial_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="testimonial_author_color">Testimonial Author
                            Color</label>
                        <input value="{{ $theme->testimonial_author_color }}" type="color"
                            id="testimonial_author_color" name="testimonial_author_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="link_border_color">Link Border Color</label>
                        <input value="{{ $theme->link_border_color }}" type="color" id="link_border_color"
                            name="link_border_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="link_text_color">Link Text Color</label>
                        <input value="{{ $theme->link_text_color }}" type="color" id="link_text_color"
                            name="link_text_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="link_text_hover_color">Link Text Hover
                            Color</label>
                        <input value="{{ $theme->link_text_hover_color }}" type="color" id="link_text_hover_color"
                            name="link_text_hover_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="link_background_color">Link Background
                            Color</label>
                        <input value="{{ $theme->link_background_color }}" type="color" id="link_background_color"
                            name="link_background_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="link_background_hover_color">Link Background
                            Hover Color</label>
                        <input value="{{ $theme->link_background_hover_color }}" type="color"
                            id="link_background_hover_color" name="link_background_hover_color">
                    </div>

                    <div class="mb-2">
                        <label class="dark:text-white block text-xl" for="page_background_color">Page Background
                            Color</label>
                        <input value="{{ $theme->page_background_color }}" type="color" id="page_background_color"
                            name="page_background_color">
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
                    <button type="submit"
                        class="px-3 py-2 bg-blue-500 mt-2 hover:bg-blue-700 text-white">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
