    <form action="{{ $action }}" method="POST">
        @csrf
        @method($method)

        @foreach ($fields as $field)
            @include('components.form-fields.' . $field['type'], ['field' => $field])
        @endforeach

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
    </form>
