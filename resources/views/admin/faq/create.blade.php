@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="FAQ" pageoneRoute="{{ route('faq.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('faq.store') }}" method="POST">
                        @csrf
                        <x-form.input name="question" label="Question" />
                        <x-form.textarea name="answer" label="Answer" />


                        <x-form.submit-button />

                    </form>
                </div>

            </div>
        @endsection
