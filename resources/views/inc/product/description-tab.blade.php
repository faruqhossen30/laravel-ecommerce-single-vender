@php
    use App\Models\Admin\Product\Product;
    $products = Product::take(5)->get();
@endphp
<section class="container pt-4 mx-auto">
    <div class="grid grid-cols-12 lg:gap-8">
        <div class="col-span-12 px-8 lg:px-0 lg:col-span-9">

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-brand border-brand font-bold"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg " id="description-tab"
                            data-tabs-target="#description" type="button" role="tab" aria-controls="description"
                            aria-selected="false">Description</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="review-tab" data-tabs-target="#review" type="button" role="tab"
                            aria-controls="review" aria-selected="false">Review</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="video-tab" data-tabs-target="#video" type="button" role="tab" aria-controls="video"
                            aria-selected="false">Video</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    {!! $product->description !!}
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="review" role="tabpanel"
                    aria-labelledby="review-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Please Login to submit a review.
                        here are no questions asked yet. Be the first one to ask a question.
                    </p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="video" role="tabpanel"
                    aria-labelledby="video-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">No Video found</p>
                </div>
            </div>


        </div>
        <div class="col-span-12 lg:col-span-3 px-4 h-[400px] lg:h-[450px] bg-white overflow-auto ">
            <h2 class="py-2 text-2xl font-bold text-center border-b border-black lg:py-4">Relate Products</h2>
            @foreach ($products as $product)
                <div class="flex py-4 space-x-4 border-b">
                    <a href="{{route('singleproduct', $product->id)}}">
                        <img src="{{ asset('uploads/galleries/' . $product->thumbnail) }}" class="w-20 h-24"
                            alt="">
                    </a>
                    <div class="">
                        <a href="{{route('singleproduct', $product->id)}}" class="text-lg font-bold text-green-600">{{$product->title}}</a>
                        <div class="flex py-6 space-x-6">
                            <span class="font-bold text-red-500">৳ {{$product->price}}</span>
                            <a href="{{route('singleproduct', $product->id)}}" class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4 text-white bg-gray-600 rounded-sm">
                                    <path fill-rule="evenodd"
                                        d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p>view Product</p>

                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
