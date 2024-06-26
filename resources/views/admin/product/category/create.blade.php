@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" pageoneRoute="{{ route('category.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-form.input label="Category Name" name="name" />
                        <x-form.thumbnail-single />
                        @include('admin.inc.modal.photo-gallery')
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <style>
                .dropify-message p {
                    font-size: 24px
                }
            </style>
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="{{ asset('js/dropify.min.js') }}"></script>

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

                });
            </script>
        @endpush
