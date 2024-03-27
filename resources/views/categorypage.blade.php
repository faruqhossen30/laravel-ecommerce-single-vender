@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('breadcrumb')
    <x-frontend.breadcrumb route="categorypage" title="Categories" subpage="List"  />
@endsection
@section('content')
<section class="container mx-auto">
    <div class="p-6 bg-white">
        <div class="grid grid-cols-12 gap-4 p-4 bg-gray-100 ">
            @foreach ($categories as $category)
                <a href="{{route('categoryproduct', $category->slug)}}" class="flex flex-col items-center col-span-4 py-6 bg-white lg:col-span-2">
                    <img src="{{ asset('uploads/galleries/' . $category->thumbnail) }}" alt=""
                        class="w-16 h-auto">
                    <h4 class="p-1 ">Men Jeans</h4>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
