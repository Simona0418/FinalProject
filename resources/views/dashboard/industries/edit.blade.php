@extends('layouts.index')

@section('content')
    <x-form :action="route('industries.update', $industry->id)" method="PUT" :fields="$fields" />
@endsection
