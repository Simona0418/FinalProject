@extends('layouts.index')

@section('content')
    <x-form :action="route('partners.update', $partner->id)" method="PUT" :fields="$fields" />
@endsection
