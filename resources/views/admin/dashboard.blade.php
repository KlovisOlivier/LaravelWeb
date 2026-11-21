<x-admin.layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            {{-- Header --}}
            <div class="pb-4">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $title }}
                </h1>
            </div>

            {{-- Content Card --}}
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg p-6">
                <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed">
                    {{ $content }}
                </p>
            </div>

        </div>
    </section>
</x-admin.layout>