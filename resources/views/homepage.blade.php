
@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('content')
    <section class="container grid grid-cols-6 gap-8 py-6 mx-auto">
        <div class="col-span-6 lg:col-span-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('img/slider-.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div> --}}
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button> --}}
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="hidden lg:block lg:col-span-2">
            <a href="#">
                <img src="{{ asset('img/special-offer.jpg') }}" class="w-full h-56 overflow-hidden md:h-96" alt="">
            </a>
        </div>


    </section>

    <section class="container mx-auto">
        <marquee behavior="" direction="rtl" class="py-1 bg-white rounded-full">পন্যের স্টক ও ডেলিভারি সম্পর্কে জেনে
            নেয়ার অনুরোধ করা যাচ্ছে। প্রযুক্তি পণ্যের মূল্য অস্থিতিশীল হওয়ায় কারণে যেকোন মুহূর্তে যেকোন প্রযুক্তি পণ্যের
            মূল্য পরিবর্তন হতে পারে। </marquee>
    </section>

    <section>
        <h2 class="pt-4 text-3xl font-semibold text-center lg:text-4xl leading-">Featured Category</h2>
    </section>

    <section class="container mx-auto">
        <div class="p-6 bg-white">
            <div class="grid grid-cols-12 gap-4 p-4 bg-gray-100 ">
                @foreach ($categories as $category)
                    <a href="#" class="flex flex-col items-center col-span-4 py-6 bg-white lg:col-span-2">
                        <img src="{{ asset('uploads/galleries/' . $category->thumbnail) }}" alt=""
                            class="w-16 h-auto">
                        <h4 class="p-1 ">Men Jeans</h4>
                    </a>
                @endforeach
            </div>
        </div>

    </section>
    @foreach ($categories as $category)
        @if (count($category->products))
            <section class="container py-12 mx-auto">
                <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
                    <span
                        class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">{{ $category->name }}</span>
                </div>
                <div class="grid grid-cols-12 gap-2 py-2">
                    @foreach ($category->products as $product)
                        <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                            <div class="overflow-hidden bg-white">
                                <a href="{{route('single.product.page', $product->id)}}">
                                    <img src="{{ asset('uploads/galleries/'.$product->thumbnail) }}"
                                        class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                                        alt="">
                                </a>

                            </div>
                            <div class="bg-white ">
                                <button>
                                    <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">{{$product->title}}</h2>
                                    <p class="py-2 text-xl font-semibold text-red-600">{{$product->price}} Tk</p>
                                </button>
                                <div class="p-1 bg-white">
                                    <div class="p-2 bg-gray-100 ">
                                        <a href="#"
                                            class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-6 h-6">
                                                <path
                                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                            </svg>

                                            <h4 class="">অর্ডার করুন</h4>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>



                </div>
            </section>
        @endif
    @endforeach



<section class="container px-2 py-12 mx-auto lg:px-36">
    <div class="py-2 border-b-2 border-black ">
        <span class="px-12 py-2 text-3xl font-semibold text-white bg-green-500 rounded-tr-full">Top Brands</span>
    </div>
    <div class="flex items-center p-4 bg-white shadow-xl justify-evenly">
        <a href="#">
            <img src="{{ asset('img/icon/yellow.png') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/easy.jpg') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/lereve-3.jpg') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/twelve.png') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/aarong.webp') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/another.jpg') }}" class="w-20 h-20 " alt="">
        </a>
        <a href="#">
            <img src="{{ asset('img/icon/nirjon.jpg') }}" class="w-20 h-20 " alt="">
        </a>
    </div>
</section>



<section class="container px-12 py-12 mx-auto lg:px-28">
    <div class="grid grid-cols-12 gap-8 ">
        <div class="flex col-span-12 pr-12 space-x-2 border-r-2 lg:col-span-3">
            <img src="{{ asset('img/icon/truck.png') }}" class="w-12 h-12" alt="">
            <div>
                <h4 class="text-xl font-semibold">Free Shipping & Return</h4>
                <p>All Orders Overs 5 Items</p>
            </div>
        </div>
        <div class="flex col-span-12 pr-12 space-x-3 border-r-2 lg:col-span-3">
            <img src="{{ asset('img/icon/payment.png') }}" class="w-12 h-12" alt="">
            <div>
                <h4 class="text-xl font-semibold">Secure Payment</h4>
                <p>We ensure secure payment</p>
            </div>
        </div>
        <div class="flex col-span-12 pr-12 space-x-3 border-r-2 lg:col-span-3">
            <img src="{{ asset('img/icon/payment.png') }}" class="w-12 h-12" alt="">
            <div>
                <h4 class="text-xl font-semibold">Money Back Guarantee</h4>
                <p>Any back withing 15 days</p>
            </div>
        </div>
        <div class="flex col-span-12 pr-12 space-x-3 lg:col-span-3">
            <img src="{{ asset('img/icon/customer-service.png') }}" class="w-12 h-12" alt="">
            <div>
                <h4 class="text-xl font-semibold">Customer Support</h4>
                <p>Call or email us 24/7</p>
            </div>
        </div>
    </div>
</section>
@endsection
