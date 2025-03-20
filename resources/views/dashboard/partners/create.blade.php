@extends('layouts.index')

@section('content')
    <x-form :action="route('partners.store')" method="POST" :fields="$fields" />
@endsection
