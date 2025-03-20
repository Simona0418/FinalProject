@extends('layouts.index')

@section('content')
    @include('components.table', compact('columns', 'fields', 'data', 'editRoute', 'deleteRoute'))
@endsection
