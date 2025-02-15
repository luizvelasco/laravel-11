@extends('layouts.app')
@section('title', 'Listagem de Usuários')

@section('content')

    <h1 class="title">{{ $greeting }}</h1>

    @foreach ($users as $user)
        <div class="user-name">{{ $user->name }} ({{ $user->email }})</div>
    @endforeach

    {{ $users->links() }}

@endsection
