@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('breadcrumb')
    <x-frontend.breadcrumb route="categorypage" title="Category" subpage="" />
@endsection
@section('content')
    <section class="container mx-auto">
        @if (isset($_GET['keyword']))
        <div class="bg-body mt-3">
            <p><strong>Your are Searching: </strong> {{ $_GET['keyword'] }}</p>
        </div>
    @endif
        <div class="grid grid-cols-12 gap-2 py-2">

            @forelse ($products as $product)
                <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg border border-gray-300">
                    <div class="overflow-hidden bg-white">
                        <a href="{{ route('singleproduct', $product->id) }}">
                            <img src="{{ asset('uploads/galleries/' . $product->thumbnail) }}"
                                class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                                alt="">
                        </a>

                    </div>
                    <div class="bg-white ">
                        <a href="{{ route('singleproduct', $product->id) }}">
                            <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">
                                {{ $product->title }}</h2>
                        </a>
                        <p class="py-2 text-xl font-semibold text-red-600 text-center">{{ $product->price }} Tk</p>
                        <div class="p-1 bg-white">
                            <div class="p-2 bg-gray-200 ">
                                <a href="#"
                                    class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                    </svg>

                                    <h4 class="">অর্ডার করুন</h4>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-9">
                    <div class="bg-white border text-center border-gray-200 shadow-sm rounded-xl p-4 md:p-5 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        No Products found
                    </div>
                </div>
            @endforelse
        </div>
    </section>
@endsection
