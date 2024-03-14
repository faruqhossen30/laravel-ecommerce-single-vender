
@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Product" pageoneRoute="{{route('product.index')}}" pagetwo="Create"  />
@endsection
@section('content')
<div class="flex flex-col gap-6 ">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-8 space-y-2">
                        <x-form.input name="title" label="Title" />
                        <label for="description" class="text-gray-500 dsark:text-gray-500 text-sm font-medium">Description</label>
                        <textarea class="" name="description" id="editor" cols="30" rows="10"></textarea>
                        <x-form.input name="price" type="number" label="Price" />
                        <x-form.input name="quantity" type="number" label="quantity" />
                        <x-form.input name="puk_code"  label="puk_code" />

                    </div>
                    <div class="col-span-4 pt-1 space-y-2">
                        <x-form.select name="category_id" label="Select Category" :data="$categories" />
                        <x-form.select name="subcategory_id" label="Select sub Category" :data="$subcategories" />


                        <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                        <input name="thumbnail" class="dropify" type="file" id="myDropify">

                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option  value="active">active</option>
                          <option  value="draft">draft</option>
                        </select>

                        <label for="discount_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select name="discount_type" id="discount_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option  value="flat">flat</option>
                          <option  value="parcentence">parcentence</option>
                        </select>
                        <x-form.input name="discount"  label="Discount" />
                        {{-- <x-form.input name="discount_type"  label="Discount_type" /> --}}
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
