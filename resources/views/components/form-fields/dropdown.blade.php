<div class="mb-4">
    <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="mt-1 p-2 border rounded w-full">
        @foreach ($field['options'] as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}"
                {{ old($field['name'], $field['value']) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
    @error($field['name'])
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>

{{-- 
1.field'name'
2.field'label'
3.field'options'
4.field'value'
5.message --}}
