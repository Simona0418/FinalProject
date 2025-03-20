@extends('layouts.index');

@section('content')
    <x-form :action="route('jobs.store')" method="POST" :fields="$fields" />
@endsection
