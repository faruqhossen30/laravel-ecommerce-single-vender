@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="FAQ" pageoneRoute="{{ route('faq.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input name="question" label="Title" value="{{ $faq->question }}" />

                        <x-form.textarea name="answer" label="Answer" value="{{ $faq->answer }}" />
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        @endsection
