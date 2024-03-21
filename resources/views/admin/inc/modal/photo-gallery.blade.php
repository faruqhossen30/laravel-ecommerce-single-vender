<div id="modalEl" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
    <div class="relative max-h-full w-full max-w-4xl">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white lg:text-2xl">
                    Terms of Service
                </h3>
                <button type="button" onclick="hideModal()"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-4">
                <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Choose
                    technology:
                </h3>
                <ul class="grid w-full gap-4 md:grid-cols-4" x-model="galleryImages">


                    <template x-for="photo in galleryImages" :key="photo.id">
                        <li>
                            <input type="checkbox" id="gallary-1"
                                x-on:click="checkedImage(1)" class="hidden peer">
                            <label for="gallary-1"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block">
                                    <img class="w-full rounded-lg max-h-72"
                                        src="#" alt="">
                                </div>
                            </label>
                        </li>
                    </template>




                    {{-- @foreach ($thumbnails as $gallary)
                        <li>
                            <input type="checkbox" id="gallary-{{ $gallary->id }}"
                                x-on:click="checkedImage({{ $gallary }})" class="hidden peer">
                            <label for="gallary-{{ $gallary->id }}"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block">
                                    <img class="w-full rounded-lg max-h-72"
                                        src="{{ asset('uploads/gallerys/' . $gallary->name) }}" alt="">
                                </div>
                            </label>
                        </li>
                    @endforeach --}}
                </ul>
                <div class="py-4">
                    {{ $thumbnails->links() }}
                </div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button type="button"
                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    I accept
                </button>
                <button type="button" onclick="hideModal()"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                    Decline
                </button>
            </div>
        </div>
    </div>
</div>
