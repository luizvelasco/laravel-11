@extends('layouts.app')
@section('title', 'Cadastro de Usuários')

@section('content')

    <h1>Cadastro de Usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Nome</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="">Senha</label>
            <input type="password" name="password">
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>

@endsection
