@extends('layouts.index')

@section('content')
    <x-form :action="route('team_members.store')" method="POST" :fields="$fields" />
@endsection
