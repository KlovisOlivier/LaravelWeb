<x-admin.layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            {{-- Header --}}
            <div class="pb-4">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $title }}
                </h1>
            </div>

            {{-- Profile Card --}}
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg p-6">
                <ul class="divide-y divide-gray-200 dark:divide-gray-700 text-sm text-gray-700 dark:text-gray-300">
                    <li class="py-3 flex flex-col sm:flex-row sm:justify-between">
                        <span class="font-medium text-gray-500 dark:text-gray-400">Nama</span>
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $nama }}</span>
                    </li>
                    <li class="py-3 flex flex-col sm:flex-row sm:justify-between">
                        <span class="font-medium text-gray-500 dark:text-gray-400">Kelas</span>
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $kelas }}</span>
                    </li>
                    <li class="py-3 flex flex-col sm:flex-row sm:justify-between">
                        <span class="font-medium text-gray-500 dark:text-gray-400">Hobby</span>
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $hobby }}</span>
                    </li>
                    <li class="py-3 flex flex-col sm:flex-row sm:justify-between">
                        <span class="font-medium text-gray-500 dark:text-gray-400">{{ $repository }}</span>
                        <a href="https://github.com/KlovisOlivier?tab=repositories"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="font-medium text-blue-600 hover:underline dark:text-blue-400">
                            https://github.com/KlovisOlivier
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
</x-admin.layout>