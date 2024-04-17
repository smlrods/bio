<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col gap-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="./pageinfo">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Page Info') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="./product-photos">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Imagens') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="./testimonials">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Feedbacks') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="./links">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Links') }}
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
