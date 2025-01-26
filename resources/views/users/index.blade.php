@extends('layouts.app')
@section('title', 'Listagem de Usuários')

@section('content')

    <h1>{{ $greeting }}</h1>

    @foreach ($users as $user)
        <div>{{ $user->name }} ({{ $user->email }})</div>
    @endforeach

@endsection
