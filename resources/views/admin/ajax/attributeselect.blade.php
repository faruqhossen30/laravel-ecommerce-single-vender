<div class="grid grid-cols-12 items-center border dark:border-gray-700 p-2">
    <label for="input-label"
        class=" col-span-3 text-sm font-medium mb-2 dark:text-white">{{$attribute->name}}</label>
    <select name="{{$attribute->slug}}"
        class="select-ram col-span-9 py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 select-colors"
        multiple>
        <option>Chose</option>
        @foreach ($attribute->values as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
