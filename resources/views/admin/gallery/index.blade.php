@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Gallery" />
        <x-button.button-plus route="{{ route('gallery.create') }}" title="Upload Photo" />
    </div>
@endsection
@section('content')
    <div class="grid grid-cols-4 md:grid-cols-4 gap-3 py-4">

        @forelse ($thumbnail as $gallary)
            <div class="grid gap-3  ">
                <div>
                    <img class="h-auto w-80 rounded-lg" src="{{ asset('uploads/gallerys/' . $gallary->name) }}" alt="">
                </div>

            </div>
        @empty
            <div>
                <div class="text-gray-800 dark:text-gray-200 text-center py-4">
                    Gallery photo not found.</div>
            </div>
        @endforelse

    </div>
    <div class="py-4">
        {{-- {{ $thumbnail->links() }} --}}
        {{ $thumbnail->links() }}
    </div>
@endsection
