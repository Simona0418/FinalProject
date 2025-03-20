@extends('layouts.index')

@section('content')
    <x-form :action="route('service_categories.update', $service_category->id)" method="PUT" :fields="$fields" />
@endsection
