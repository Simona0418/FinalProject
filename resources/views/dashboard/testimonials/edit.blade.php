@extends('layouts.index')

@section('content')
    <x-form :action="route('testimonials.update', $testimonial->id)" method="PUT" :fields="$fields" />
@endsection
