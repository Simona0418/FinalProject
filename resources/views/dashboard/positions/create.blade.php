@extends('layouts.index')

@section('content')
    <x-form :action="route('positions.store')" method="POST" :fields="$fields" />
@endsection
