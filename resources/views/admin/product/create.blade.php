@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Product" pageoneRoute="{{ route('product.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                        x-data="{
                        category_id:null,
                        subcategories: [],
                        catChange(event){
                            axios.get(`/admin/ajax/subcategory/${event.target.value}`)
                            .then(res=>{
                                this.subcategories = res.data
                                console.log(res.data)
                            })
                        }
                        }">
                        @csrf

                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-8 space-y-2">
                                <x-form.input name="title" label="Title" />
                                <label for="description"
                                    class="text-gray-500 dsark:text-gray-500 text-sm font-medium">Description</label>
                                <textarea class="" name="description" id="editor" cols="30" rows="10"></textarea>
                                <x-form.input name="price" type="number" label="Price" />
                                <x-form.input name="quantity" type="number" label="quantity" />
                                <x-form.input name="puk_code" label="puk_code" />

                            </div>
                            <div class="col-span-4 pt-1 space-y-2">
                                {{-- <x-form.select name="category_id" label="Select Category" :data="$categories" /> --}}
                                {{-- <x-form.select name="subcategory_id" label="Select sub Category" :data="$subcategories" /> --}}

                                <div class="py-1">
                                    <label for="category_id" class="text-gray-500 dark:text-gray-500">Category</label>
                                    <select name="category_id" id="category_id" x-model="category_id" x-on:change="catChange"
                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="py-1">
                                    <label for="subcategory_id" class="text-gray-500 dark:text-gray-500">Sub
                                        Category</label>
                                    <select name="subcategory_id" id="subcategory_id" x-model="subcategories"
                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option value="">Select</option>
                                        <template x-for="subcategory in subcategories" :key="subcategory.id">
                                            <option :value="subcategory.id" x-text="subcategory.name"></option>
                                        </template>
                                    </select>
                                    @error('subcategory_id')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>




                                <label for="thumbnail"
                                    class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                                {{-- <input name="thumbnail" class="dropify" type="file" id="myDropify"> --}}
                                <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Toggle modal
                                </button>

                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <select name="status" id="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="active">active</option>
                                    <option value="draft">draft</option>
                                </select>

                                <label for="discount_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <select name="discount_type" id="discount_type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="flat">flat</option>
                                    <option value="parcentence">parcentence</option>
                                </select>
                                <x-form.input name="discount" label="Discount" />
                                {{-- <x-form.input name="discount_type"  label="Discount_type" /> --}}
                            </div>

                        </div>



                        <!-- Main modal -->
                        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Static modal
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="static-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                    <input type="checkbox" id="gallary-{{ $gallary->id }}" name="media[]"
                                                        value="" class="hidden peer" required="">
                                                    <label for="gallary-{{ $gallary->id }}"
                                                        class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                        <div class="block">
                                                            <img class="w-full max-h-72 rounded-lg"
                                                                src="{{ asset('uploads/gallerys/' . $gallary->name) }}"
                                                                alt="">
                                                        </div>
                                                    </label>
                                                </li>
                                            @endforeach
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="static-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                            accept</button>
                                        <button data-modal-hide="static-modal" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
            <script src="{{ asset('js/ckeditor.js') }}"></script>
            <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <style>
                .ck-editor__editable_inline {
                    height: 300px;
                }

                .dropify-message p {
                    font-size: 24px
                }
            </style>
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="{{ asset('js/dropify.min.js') }}"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.log(error);
                    });
            </script>
            <script>
                $(document).ready(function() {
                    $('.dropify').dropify({
                        messages: {
                            'default': 'Drag and drop a file here or click',
                            'replace': 'Drag and drop or click to replace',
                            'remove': 'Remove',
                            'error': 'Ooops, something wrong happended.'
                        }
                    });
                    $('.js-example-basic-multiple').select2();
                });
            </script>
        @endpush
