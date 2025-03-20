@extends('layouts.index')

@section('content')
    <x-form :action="route('positions.update', $position->id)" method="PUT" :fields="$fields" />
@endsection
