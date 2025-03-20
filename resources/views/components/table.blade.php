<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="min-w-full text-sm text-left text-gray-500">

        <thead class="text-xs text-white uppercase bg-gray-500">
            <tr>
                @foreach ($columns as $column)
                    <th scope="col" class="px-6 py-3">{{ $column }}</th>
                @endforeach
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($data as $item)
                <tr class="hover:bg-orange-100">
                    @foreach ($fields as $field)
                        <td class="px-6 py-4">
                            @php
                                $fieldParts = explode('.', $field);
                                $value = $item;
                                foreach ($fieldParts as $part) {
                                    $value = $value->$part ?? 'N/A';
                                }
                            @endphp
                            {{ $value }}
                        </td>
                    @endforeach

                    <td class="px-6 py-4">
                        <a href="{{ route($editRoute, $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        |
                        <form action="{{ route($deleteRoute, $item->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-add-button :createRoute="route($createRoute)" :label="$entityName" />
</div>
