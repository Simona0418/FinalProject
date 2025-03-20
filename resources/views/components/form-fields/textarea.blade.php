<div class="mb-4">
    <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="4" class="mt-1 p-2 border rounded w-full">{{ old($field['name'], $field['value'] ?? '') }}</textarea>
    @error($field['name'])
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
