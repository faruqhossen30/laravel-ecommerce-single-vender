@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Color" pageoneRoute="{{ route('color.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('color.update', $color->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input label="Color Name" name="name" value="{{ $color->name }}" />
                        <x-form.input label="Description" name="description" value="{{ $color->name }}" />
                        <x-form.input label="Color Code" name="code" type="color" value="{{ $color->name }}" />
                        <x-form.select-status :status="$color->status" />
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        @endsection
