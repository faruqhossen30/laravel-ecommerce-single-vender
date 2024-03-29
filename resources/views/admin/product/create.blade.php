@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Product" pageoneRoute="{{ route('product.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 " x-data="data">
        <div class="p-6">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-8 space-y-2">
                        <x-form.select name="category_id" label="Category" :data="$categories" />
                        <x-form.select name="subcategory_id" label=" Sub Category" :data="$subcategories" />
                        <x-form.input name="title" label="Product Title" />
                        <label for="description"
                            class="text-sm font-medium text-gray-500 dsark:text-gray-500">Description</label>
                        <div>
                            <textarea class="" name="description" id="editor" cols="30" rows="10"></textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-form.textarea name="short_description" label="Short Description" />
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <x-form.input name="price" type="number" label="Price" />
                            </div>
                            <div class="col-span-1">
                                <x-form.input name="quantity" type="number" label="Quantity" />
                            </div>

                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <x-form.input name="alert_quantity" type="number" label="Alert Quantity" />
                            </div>
                            <div class="col-span-1">
                                <!-----Discount type and discount start ---------->
                                <div>
                                    <label for="Discount" class="block text-sm  mb-2 dark:text-white">Discount</label>
                                    <div class="relative">
                                        <input type="number" id="hs-inline-leading-pricing-select-label" name="discount"
                                            class="py-3 px-4 ps-9 pe-20 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="0.00">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                            <span class="text-gray-500  font-semibold"><strong>৳</strong></span>
                                        </div>
                                        <div class="absolute inset-y-0 end-0 flex items-center text-gray-500 pe-px">
                                            <label for="discount_type" class="sr-only">Currency</label>
                                            <select id="discount_type" name="discount_type"
                                                class="block w-full border-transparent rounded-lg focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-800">
                                                <option>Flat</option>
                                                <option>Parcentence</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-----Discount type and discount end ---------->
                            </div>

                        </div>


                    </div>
                    <div class="col-span-12 lg:col-span-4 pt-1 space-y-2">
                        <x-form.input name="sku_code" label="SUK Code" />
                        <x-form.select-status-draft name="status" label="Status" />
                        <x-form.select name="color_id" label="Color" :data="$colors" />

                        <x-form.select name="brand_id" label="Brand" :data="$brands" />
                        <x-form.card title="SEO Section">
                            <x-form.input name="meta_title" label="Meta Title" />
                            <x-form.textarea name="meta_description" label="Meta Description" />
                            <div>
                                <label for="input_tags" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Meta
                                    Keyword</label>
                                <input type="text" id="input_tags" name="meta_keyword"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                    placeholder="tags" required />
                            </div>
                        </x-form.card>
                        <x-form.thumbnail-single />
                        <button type="button" onclick="showMultiPhotoModal()"
                            class="tags_input py-3 w-full px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <x-icon.photo />
                            Image Gallery
                        </button>
                        <div class="space-y-2" id="photosDiv">
                        </div>
                    </div>

                </div>
                @include('admin.inc.modal.photo-gallery')
                @include('admin.inc.modal.multi-photo-gallery')
                <x-form.submit-button />
            </form>
        </div>
    </div>
@endsection




@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <style>
        .tagsinput {
            width: 100% !important;
        }

        #input_tags_tag {
            border-radius: 12px;
            padding: 4px 10px;
            width: 100%;
        }

        .ck-editor__editable_inline {
            height: 300px;
        }

        .dropify-message p {
            font-size: 24px
        }
    </style>


    <link rel="stylesheet" type="text/css" href="{{ asset('css/inputTags.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/inputTags.jquery.min.js') }}"></script>

    <script>
        $('#input_tags').tagsInput();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select-colors').select2()
            // .on('change.select', function(e, value) {
            //     let items = $(this).val();
            //     // let id = e.target.value;
            //     $('#attributesDiv').empty();
            //     $.each(items, function(index, value) {
            //         $.ajax({
            //             url: '{{ route('ajax.attribute') }}',
            //             data: {
            //                 attribute_id: value
            //             },
            //             success: function(res) {
            //                 // console.log(res);
            //                 $('#attributesDiv').append(res)
            //             }
            //         });
            //     });
            // });

        })
    </script>
    <script>
        var photos = [];
        $(document).on('click', 'input[name="images"]', function(e) {
            let photo = $(this).val();
            pushUnique(photos, photo)
            console.log('click', photo);
            generatePhotoInput();
        });

        function pushUnique(arr, value) {
            // Check if the value already exists in the array
            const index = arr.indexOf(value);
            // If the value exists, remove it
            if (index !== -1) {
                arr.splice(index, 1);
            } else {
                // Push the new value into the array
                arr.push(value);
            }

        }

        function removePhoto(value) {
            pushUnique(photos, value);
            generatePhotoInput();
        }

        function generatePhotoInput() {
            $('#photosDiv').empty();
            $.each(photos, function(index, value) {
                $('#photosDiv').append(
                    `
                    <div class="flex items-center justify-between border dark:border-gray-800">
                        <input type="hidden" value="${value}" name="slider[]">
                        <img src="${window.location.origin}/uploads/galleries/${value}" class="w-10 h-10"
                            alt="Image">
                        <span class="px-4 text-red-500 cursor-pointer" onclick="removePhoto('${value}')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </span>
                    </div>
                    `
                )
            });
        }
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.log(error);
            });
    </script>

    <script>
        let data = {
            category_id: null,
            subcategories: [],
            images: [],
            catChange(event) {
                axios.get(`/admin/ajax/subcategory/${event.target.value}`)
                    .then(res => {
                        this.subcategories = res.data
                        console.log(res.data)
                    })
            },
            attributeItemsChange() {
                console.log(this.attributeItems);
            },

            checkedImage(obj) {
                const index = this.images.findIndex(item => item.id === obj.id); // Assuming 'id' is unique
                if (index !== -1) {
                    // If the object with the same id exists, remove it
                    this.images.splice(index, 1);
                    console.log('already exist');
                } else {
                    // Push the new object into the array
                    this.images.push(obj);
                }

            },
        }
    </script>
@endpush
