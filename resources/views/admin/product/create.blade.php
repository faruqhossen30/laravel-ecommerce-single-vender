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
                    <div class="col-span-8 space-y-2">
                        <x-form.input name="title" label="Title" />
                        <label for="description"
                            class="text-sm font-medium text-gray-500 dsark:text-gray-500">Description</label>
                        <textarea class="" name="description" id="editor" cols="30" rows="10"></textarea>
                        <x-form.input name="price" type="number" label="Price" />
                        <x-form.input name="quantity" type="number" label="Quantity" />
                        <x-form.input name="puk_code" label="PUK Code" />
                        <div
                            class="py-3 flex items-center text-sm text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                            Attributes</div>
                        {{-- Select Attributes --}}
                        <div class="grid grid-cols-12 items-center border dark:border-gray-700 p-2">
                            <label for="input-label"
                                class=" col-span-3 text-sm font-medium mb-2 dark:text-white">Attributes</label>
                            <select name="attribute_ids[]"
                                class="col-span-9 py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 select-colors"
                                multiple>
                                <option>Chose</option>
                                @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="attributesDiv">

                        </div>
                    </div>
                    <div class="col-span-4 pt-1 space-y-2">
                        {{-- <x-form.select name="category_id" label="Select Category" :data="$categories" /> --}}
                        {{-- <x-form.select name="subcategory_id" label="Select sub Category" :data="$subcategories" /> --}}

                        <div class="py-1">
                            <label for="category_id" class="text-gray-500 dark:text-gray-500">Category</label>
                            <select name="category_id" id="category_id" x-model="category_id" x-on:change="catChange"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="py-1">
                            <label for="subcategory_id" class="text-gray-500 dark:text-gray-500">Sub
                                Category</label>
                            <select name="subcategory_id" id="subcategory_id"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Select</option>
                                <template x-for="subcategory in subcategories" :key="subcategory.id">
                                    <option :value="subcategory.id" x-text="subcategory.name"></option>
                                </template>
                            </select>
                            @error('subcategory_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

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
                        <button type="button" onclick="showModal()"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>

                            Image Gallery
                        </button>


                        <div class="space-y-2" x-model="images">
                            <template x-for="image in images" :key="image.id">
                                <div class="flex items-center justify-between border dark:border-gray-800">
                                    <input type="hidden" :value="image.id" name="images[]">
                                    <img :src="`${window.location.origin}/uploads/gallerys/${image.name}`" class="w-10 h-10"
                                        alt="Image">
                                    <span class="px-4 text-red-500 cursor-pointer" x-on:click="checkedImage(image)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </span>
                                </div>
                            </template>

                        </div>
                    </div>

                </div>
                @include('admin.inc.modal.photo-gallery')
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
    <script>
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


        // @foreach ($attributes as $attribute)
        //     $('.select-{{ $attribute->slug }}').select2();
        // @endforeach
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

    <script>
        var myModal = document.getElementById("modalEl");
        const options = {
            placement: "top-center",
            backdrop: "static",
            backdropClasses: "bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40",
            closable: true,
            onHide: () => {
                $('#galleryModalBody').empty();
            },
            onShow: () => {
                axios.get(`http://127.0.0.1:8000/ajax/galleries`)
                    .then(res => {
                        $('#galleryModalBody').append(res.data);
                    })
                console.log("modal is shown");
            },
            onToggle: () => {
                console.log("modal has been toggled");
            },
        };

        function showModal() {
            var myModalObject = new Modal(myModal, options);
            myModalObject.show();
        }

        function hideModal() {
            var myModalObject = new Modal(myModal, options);
            myModalObject.hide();
        }
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            console.log(page);
            record(page)
        })

        function record(page) {
            $.ajax({
                url: "/ajax/galleries/paginate?page=" + page,
                success: function(res) {
                    $('#galleryModalBody').empty();
                    $('#galleryModalBody').append(res);
                }
            })
        }
    </script>
@endpush
