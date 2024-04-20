<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BIO</title>
    @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>

<body class="relative h-full min-h-screen bg-pink max-w-screen-md mx-auto flex flex-col">
    <!-- HERO -->
    <header class="w-full max-h-72 overflow-hidden relative">
        <div class="swiper productsSwiper w-full max-h-72 h-72 relative">
            <div class="swiper-wrapper">
                @foreach ($productPhotos as $productPhoto)
                    <div class="swiper-slide">
                        <img class="block w-full h-full object-cover" draggable="false" src="{{ $productPhoto->url }}"
                            alt="Product Image" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Business info --}}
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 flex flex-col items-center justify-center text-white text-center w-full">
            @if ($pageInfo->logo_url)
                <div class="w-32 h-32 mb-1">
                    <img class="block w-full h-full object-cover rounded-full" draggable="false"
                        src="{{ $pageInfo->logo_url }}" alt="logo" />
                </div>
            @endif
            <h1 class="text-white font-h1 font-bold sm:text-4xl text-2xl mb-1">
                {{ $pageInfo->title }}
            </h1>
            @if ($pageInfo->description)
                <p class="font-p font-light text-xl text-[#F4DFD7]">
                    {{ $pageInfo->description }}
                </p>
            @endif
        </div>
        <div class="absolute top-0 left-0 w-full h-full z-10 bg-black opacity-20"></div>
    </header>

    <!-- DIVIDER -->
    <div class="flex py-2 px-4 justify-center items-center">
        <span class="w-full h-1 bg-black"></span>
    </div>

    <!-- TESTIMONIALS -->
    <section class="text-center mx-5 my-10 font-p">
        <div class="swiper testimonialsSwiper">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <article>
                            <blockquote class="flex flex-col justify-center items-center">
                                <svg class="mb-1" width="175" height="25" viewBox="0 0 175 47" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_25_250" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="35" y="5" width="34" height="33">
                                        <path d="M35.432 5.7066H68.7036V37.0122H35.432V5.7066Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_25_250)">
                                        <path
                                            d="M52.0872 5.7066L55.9676 17.66H68.5323L58.3653 25.0504L62.2457 37.0122L52.0872 29.6226L41.9202 37.0122L45.8091 25.0504L35.6421 17.66H48.2059L52.0872 5.7066Z"
                                            fill="black" />
                                    </g>
                                    <mask id="mask1_25_250" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="5" width="34" height="33">
                                        <path d="M0.215965 5.7066H33.2715V37.0122H0.215965V5.7066Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_25_250)">
                                        <path
                                            d="M16.6742 5.7066L20.5555 17.66H33.1192L22.9522 25.0504L26.8335 37.0122L16.6742 29.6226L6.50718 37.0122L10.3885 25.0504L0.229088 17.66H12.7937L16.6742 5.7066Z"
                                            fill="black" />
                                    </g>
                                    <mask id="mask2_25_250" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="70" y="5" width="35" height="33">
                                        <path d="M70.8642 5.7066H104.136V37.0122H70.8642V5.7066Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask2_25_250)">
                                        <path
                                            d="M87.5 5.7066L91.3805 17.66H103.945L93.7781 25.0504L97.6586 37.0122L87.5 29.6226L77.3331 37.0122L81.2219 25.0504L71.055 17.66H83.6196L87.5 5.7066Z"
                                            fill="black" />
                                    </g>
                                    <mask id="mask3_25_250" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="106" y="5" width="34" height="33">
                                        <path d="M106.296 5.7066H139.568V37.0122H106.296V5.7066Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask3_25_250)">
                                        <path
                                            d="M122.913 5.7066L126.794 17.66H139.358L129.191 25.0504L133.071 37.0122L122.913 29.6226L112.746 37.0122L116.635 25.0504L106.468 17.66H119.032L122.913 5.7066Z"
                                            fill="black" />
                                    </g>
                                    <mask id="mask4_25_250" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="141" y="5" width="34" height="33">
                                        <path d="M141.728 5.7066H174.784V37.0122H141.728V5.7066Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask4_25_250)">
                                        <path
                                            d="M158.326 5.7066L162.207 17.66H174.771L164.604 25.0504L168.485 37.0122L158.326 29.6226L148.158 37.0122L152.048 25.0504L141.881 17.66H154.445L158.326 5.7066Z"
                                            fill="black" />
                                    </g>
                                </svg>
                                <p class="italic mb-2">
                                    {{ $testimonial->text }}
                                </p>
                                <footer>
                                    <cite class="font-light">{{ $testimonial->author }}</cite>
                                </footer>
                            </blockquote>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LINKS -->
    <section class="mx-5 font-h1 flex flex-col gap-3">
        @foreach ($links as $link)
            <a href="{{ $link->url }}">
                <button class="py-6 w-full border hover:bg-black hover:text-white border-black bg-white text-xl">
                    {{ $link->text }}
                </button>
            </a>
        @endforeach
    </section>
    <!-- SOCIAL MEDIAS -->
</body>

</html>
