@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Color" />
        <x-button.button-plus route="{{ route('color.create') }}" title="Create Color" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">

    </div>
    <div class="bg-white dark:bg-transparent ">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <x-table.th title="S.N" />
                                    <x-table.th title="name" />
                                    <x-table.th title="Description" />
                                    <x-table.th title="Code" />
                                    <x-table.th title="Status" />
                                    <x-table.th title="Action" class="text-end" />
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($colors as $color)
                                    <tr>
                                        <x-table.td> {{ $colors->firstItem() + $loop->index }} </x-table.td>
                                        <x-table.td> {{ $color->name }} </x-table.td>
                                        <x-table.td> {{ $color->description }} </x-table.td>
                                        <x-table.td>
                                            <div class="w-10 h-5 rounded-xl" style="background-color: {{ $color->code }}">
                                            </div>
                                        </x-table.td>
                                        <x-table.td class="welcome">
                                            <x-table.status :status="$color->status" />
                                        </x-table.td>
                                        <x-table.td class="text-end">
                                            <x-table.crudactionbutton route="color" :id="$color->id" />
                                        </x-table.td>
                                    </tr>
                                @empty
                                    <td colspan="5"
                                        class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-gray-200">
                                        No colors found.
                                    </td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $colors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
