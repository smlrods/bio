<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-3 flex flex-col gap-3 max-w-sm">
        <div class="w-full bg-base-200">
            <div class="overflow-hidden">
                <a href="./pageinfo">
                    <div class="p-6">
                        {{ __('Page Info') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full bg-base-200">
            <div class="overflow-hidden">
                <a href="./customize">
                    <div class="p-6">
                        {{ __('Customize') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full bg-base-200">
            <div class="overflow-hidden">
                <a href="./product-photos">
                    <div class="p-6">
                        {{ __('Imagens') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full bg-base-200">
            <div class="overflow-hidden">
                <a href="./testimonials">
                    <div class="p-6">
                        {{ __('Feedbacks') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full bg-base-200">
            <div class="overflow-hidden">
                <a href="./links">
                    <div class="p-6">
                        {{ __('Links') }}
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
