@extends('layouts.index')

@section('content')
    <x-form :action="route('services.update', $service->id)" method="PUT" :fields="$fields" />
@endsection
