<div class="mb-4">
    <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
    <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}"
        value="{{ old($field['name'], $field['value'] ?? '') }}" class="mt-1 p-2 border rounded w-full">
    @error($field['name'])
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>


{{--
1.field'name'
2.field'label'
3.field'value'
4.message --}}
