<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main-container">
            <!-- H1 que mostra o nome do usuario logado -->
            <h1>{{ Auth::user()->name }} está logado com sucesso</h1>
            <!-- Botao para sair da conta logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Sair</button>
            </form>
        </div>
    </main>
</body>
</html>