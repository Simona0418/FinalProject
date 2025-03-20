@extends('layouts.index')

@section('content')
    <x-form :action="route('service_categories.store')" method="POST" :fields="$fields" />
@endsection
