<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Logado</title>
</head>
<body>
    <header>
        <h1>Crud completo</h1>
    </header>
    <main>
        <div class="main-container">
            <!-- H1 que mostra o nome do usuario logado -->
            <h1 class="mt-3">{{ Auth::user()->name }} está logado com sucesso</h1>
            <!-- Botao para sair da conta logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mt-2">Sair</button>
            </form>
        </div>
    </main>
    <footer>
        <p class="mt-3">&copy; 2025 Crud completo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>