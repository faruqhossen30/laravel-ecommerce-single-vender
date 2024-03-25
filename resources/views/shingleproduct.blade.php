@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('single')
<section class="container mx-auto">
    <div class="grid grid-cols-12 px-2 py-1 pt-8 border-b-2 border-blue-400 lg:px-16 lg:py-2">
        <div class="col-span-12 px-12 lg:col-span-5 lg:px-0">
            <a href="#" class="py-2">
                <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}"
                    class="border-4 border-white rounded-lg shadow-md shadow-gray-400 h-[550px] hover:shadow-md hover:shadow-green-500"
                    alt="">
            </a>
            <div class="py-6 space-x-2">
                <button type="button" class="border-4 border-white rounded-md shadow-md shadow-gray-300">
                    <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}" class="h-14" alt="">
                </button>
                <button type="button" class="border-2 border-white rounded-lg shadow-md shadow-gray-300">
                    <img src="{{ asset('uploads/products/black-semi-fitted-jacquard-cotton-panjabi-mp-7-2023-10-18-01-06-37-4557.jpg') }}"
                        class="h-14" alt="">
                </button>
                <button type="button" class="border-4 border-white rounded-md shadow-gray-300">
                    <img src="{{ asset('uploads/products/black-semi-fitted-jacquard-cotton-panjabi.jpg') }}"
                        class="h-14" alt="">
                </button>
                <button type="button" class="border-2 border-white rounded-lg shadow-md shadow-gray-300">
                    <img src="{{ asset('uploads/products/black-semi-fitted-jacquard-cotton-panjabi-pm.jpg') }}"
                        class="h-14" alt="">
                </button>
                <button type="button" class="border-2 border-white rounded-lg shadow-md shadow-gray-300">
                    <img src="{{ asset('uploads/products/black-semi-fitted-jacquard-cotton-panjabi-mp-7-2023-10-18-01-06-38-1312.jpg') }}"
                        class="h-14" alt="">
                </button>


            </div>
        </div>
        <div class="col-span-12 lg:col-span-7">
            <div class="">
                <div class="px-4 lg:px-0">
                    <h2 class="text-2xl font-semibold text-green-500 lg:text-3xl">Black Semi Fitted Jacquard Cotton Panjabi MP-7</h2>
                <p class="py-2 text-2xl font-semibold">
                    Price : <span class="font-normal ">2795</span> tk
                </p>
                <p class="pb-2 ">
                    Select Size :
                </p>
                <div class="py-2 space-x-2">
                    <a href="#" class="p-2 border-2 border-yellow-400">34</a>
                    <a href="#" class="p-2 border-2 border-yellow-400">38</a>
                    <a href="#" class="p-2 border-2 border-yellow-400">36</a>
                </div>
                <form class="max-w-xs py-6 mx-auto">
                    <div class="relative flex items-center max-w-[11rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input"
                            class="p-3 bg-gray-100 border border-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 rounded-s-lg h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1"
                            data-input-counter-max="5" aria-describedby="helper-text-explanation"
                            class="block w-full text-sm font-medium text-center text-gray-900 border-gray-300 bg-gray-50 border-x-0 h-11 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="3" required />

                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input"
                            class="p-3 bg-gray-100 border border-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 rounded-e-lg h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>
                </div>
                <div class="space-y-4 lg:mr-40">
                    <div class="text-white ">
                        <a href="#" class="flex justify-center py-2 space-x-3 bg-green-600 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                            <h4 class="">অর্ডার করুন</h4>
                        </a>
                    </div>
                    <div class="text-white">
                        <a href="#" class="flex justify-center py-2 space-x-3 bg-red-600 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                            <h4 class="">কার্টে যোগ করুন</h4>
                        </a>
                    </div>
                    <div class="text-white ">
                        <a href="#" class="flex justify-center py-2 space-x-3 bg-green-600 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h4 class=""> +8801615597820</h4>
                        </a>
                    </div>
                    <div class="text-white ">
                        <a href="#" class="flex items-center justify-center py-2 mb-6 space-x-3 bg-red-600 rounded-md lg:mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <h4 class="">+8801615597820</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container pt-4 mx-auto">
    <div class="grid grid-cols-12 lg:gap-8">
        <div class="col-span-12 px-8 lg:px-0 lg:col-span-9">
            <div class="py-2 bg-white">
                <div class="">
                    <a href="#"
                        class="p-2 text-lg font-semibold text-white bg-green-600 border rounded-md">Description</a>
                    <a href="#" class="p-2 text-lg font-semibold border rounded-md">Review</a>
                    <a href="#" class="p-2 text-lg font-semibold border rounded-md">Video</a>
                </div>
                <div class="p-6">
                    <h2 class="pb-4 text-2xl font-semibold">Descriptions</h2>
                    <div class="flex">
                        <div class="flex flex-col space-y-2">
                            <h4 class="text-base font-semibold">COLOR</h4>
                            <h4 class="text-base font-semibold">SIZE</h4>
                            <h4 class="text-base font-semibold">FABRIC</h4>
                            <h4 class="text-base font-semibold">SLEEVE</h4>
                            <h4 class="text-base font-semibold">STYLE</h4>
                            <h4 class="text-base font-semibold">WASH CARE</h4>
                        </div>
                        <div class="flex flex-col px-2 space-y-2">
                            <p>Black</p>
                            <p>38, 40, 42, 44, 46</p>
                            <p>Jacquard</p>
                            <p>Full Sleeve</p>
                            <p>Regular</p>
                            <p>Wash separately in mild detergent</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-12 lg:col-span-3 px-4 h-[400px] lg:h-[450px] bg-white overflow-auto ">
            <h2 class="py-2 text-2xl font-bold text-center border-b border-black lg:py-4">Relate Products</h2>
            <div class="flex py-4 space-x-4 border-b">
                <a href="#">
                    <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}" class="w-20 h-24" alt="">
                </a>
                <div class="">
                    <a href="#" class="text-lg font-bold text-green-600">Fitted Panjabi MP-1</a>
                    <div class="flex py-6 space-x-6">
                        <span class="font-bold text-red-500">৳ 2350</span>
                        <a href="#" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white bg-gray-600 rounded-sm">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                              </svg>
                              <p>view Product</p>

                        </a>
                    </div>
                </div>
            </div>
            <div class="flex py-4 space-x-4 border-b">
                <a href="#">
                    <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}" class="w-20 h-24" alt="">
                </a>
                <div class="">
                    <a href="#" class="text-lg font-bold text-green-600">Fitted Panjabi MP-1</a>
                    <div class="flex py-6 space-x-6">
                        <span class="font-bold text-red-500">৳ 2350</span>
                        <a href="#" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white bg-gray-600 rounded-sm">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                              </svg>
                              <p>view Product</p>

                        </a>
                    </div>
                </div>
            </div>
            <div class="flex py-4 space-x-4 border-b">
                <a href="#">
                    <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}" class="w-20 h-24" alt="">
                </a>
                <div class="">
                    <a href="#" class="text-lg font-bold text-green-600">Fitted Panjabi MP-1</a>
                    <div class="flex py-6 space-x-6">
                        <span class="font-bold text-red-500">৳ 2350</span>
                        <a href="#" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white bg-gray-600 rounded-sm">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                              </svg>
                              <p>view Product</p>

                        </a>
                    </div>
                </div>
            </div>
            <div class="flex py-4 space-x-4 border-b">
                <a href="#">
                    <img src="{{ asset('uploads/products/black-fitted-viscose-panjabi.jpg') }}" class="w-20 h-24" alt="">
                </a>
                <div class="">
                    <a href="#" class="text-lg font-bold text-green-600">Fitted Panjabi MP-1</a>
                    <div class="flex py-6 space-x-6">
                        <span class="font-bold text-red-500">৳ 2350</span>
                        <a href="#" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white bg-gray-600 rounded-sm">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                              </svg>
                              <p>view Product</p>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
