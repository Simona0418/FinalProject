@extends('layouts.index');

@section('content')
    <x-form :action="route('jobs.update', $job->id)" method="PUT" :fields="$fields" />
@endsection
