@extends('layouts.index')

@section('content')
    <x-form :action="route('testimonials.store')" method="POST" :fields="$fields" />
@endsection
