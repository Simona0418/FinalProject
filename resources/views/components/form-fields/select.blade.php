<div class="mb-4">
    <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">
        {{ $field['label'] }}
    </label>
    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}"
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        @foreach ($field['options'] as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ $optionValue == $field['value'] ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
    @error($field['name'])
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
