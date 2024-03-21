<div id="gallery-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-4xl max-h-full p-4">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Photo Gallary
                                        </h3>
                                        <button type="button"
                                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="gallery-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
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
                                        <ul class="grid w-full gap-4 md:grid-cols-4">
                                            @foreach ($thumbnails as $gallary)
                                                <li>
                                                    <input type="checkbox" id="gallary-{{ $gallary->id }}"
                                                        x-on:click="checkedImage({{ $gallary }})"
                                                        class="hidden peer">
                                                    <label for="gallary-{{ $gallary->id }}"
                                                        class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                        <div class="block">
                                                            <img class="w-full rounded-lg max-h-72"
                                                                src="{{ asset('uploads/gallerys/' . $gallary->name) }}"
                                                                alt="">
                                                        </div>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="py-4">
                                            {{$thumbnails->links()}}
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                                        <button id="modalInsertButton" data-modal-hide="gallery-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Insert
                                            Photos</button>
                                        <button data-modal-hide="gallery-modal" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>
