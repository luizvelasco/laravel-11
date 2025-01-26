<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mostrar usuário {{ $user->name }}</h1>

    @php
        $isAdmin=false;
    @endphp

    @if ($user->id === 1)
        <div>Sou admin</div>
    @else 
        <div>Não Sou admin</div>
    @endif

</body>
</html>