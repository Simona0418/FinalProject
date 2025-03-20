@extends('layouts.index')

@section('content')
    <x-form :action="route('industries.store')" method="POST" :fields="$fields" />
@endsection
