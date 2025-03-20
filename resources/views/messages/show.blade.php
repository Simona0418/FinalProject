@extends('layouts.index')

@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-gray-500">
        <div class="px-6 py-4 text-white">
            <h2 class="text-xl font-semibold">Message Details</h2>

            <p class="mt-4"><strong>Subject:</strong> {{ $message->subject }}</p>
            <p class="mt-2"><strong>From:</strong> {{ $message->email }}</p>
            <p class="mt-2"><strong>Sent at:</strong> {{ $message->created_at->format('d M, Y h:i A') }}</p>

            <p class="mt-4"><strong>Message:</strong> {{ $message->message }}</p>

            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">Delete
                    Message</button>
            </form>
        </div>
    </div>
@endsection
