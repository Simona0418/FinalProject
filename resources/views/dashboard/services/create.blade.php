@extends('layouts.index')

@section('content')
    <x-form :action="route('services.store')" method="POST" :fields="$fields" />
@endsection
