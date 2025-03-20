<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <table class="min-w-full text-sm text-left text-gray-500 bg-gray-800">
        <thead class="text-xs text-white uppercase bg-gray-600">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Subject
                    @if ($unreadCount > 0)
                        <span
                            class="bg-red-500 text-white px-3 py-1 ml-2 rounded-full text-xs font-semibold">{{ $unreadCount }}
                            New</span>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3">Status</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($messages as $message)
                <tr class="hover:bg-orange-100">
                    <td class="px-6 py-4">
                        <a href="{{ route('messages.show', $message->id) }}"
                            class="text-gray-700 hover:text-blue-500">{{ $message->subject }}</a>
                    </td>

                    <td class="px-6 py-4">
                        @if (!$message->is_read)
                            <span
                                class="badge w-[63px] rounded-full bg-red-500 text-white py-1 px-3 text-xs">Unread</span>
                        @else
                            <span
                                class="badge w-[63px] rounded-full bg-green-500 text-white py-1 px-3 text-xs">Read</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
