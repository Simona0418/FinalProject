@extends('layouts.index')

@section('content')
    <x-form :action="route('team_members.update', $teamMember->id)" method="PUT" :fields="$fields" />
@endsection
