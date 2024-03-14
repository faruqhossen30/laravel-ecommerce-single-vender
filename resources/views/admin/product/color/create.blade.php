@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Color" pageoneRoute="{{ route('color.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif
        </div>
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('color.store') }}" method="POST">
                        @csrf
                        <x-form.input label="Color Name" name="name" />
                        <x-form.input label="Color Description" name="description" />
                        <x-form.input label="Color Code" name="code" type="color" />
                        <x-form.select-status />
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
