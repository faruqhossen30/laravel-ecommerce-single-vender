<div class="py-1">
    <label for="status" class="text-gray-500 dark:text-gray-500">Status</label>
    <select name="status" id="status"
        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
        <option value="">Select Status</option>
        <option value="active" @if (isset($status) && $status == 'active') selected @endif>Active</option>
        <option value="draft" @if (isset($status) && $status == 'draft') selected @endif>Draft</option>
    </select>
    @error('status')
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>


{{-- <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
<select name="status" id="status"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="active">Active</option>
    <option value="draft">Draft</option>
</select> --}}
