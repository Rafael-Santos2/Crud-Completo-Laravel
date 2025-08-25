<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Crud completo</h1>
    </header>
    <main>
        <div class="main-container">
            <h1>Cadastrar Usuário</h1>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('welcome') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </main>
    <footer>
        <p class="mt-3">&copy; 2025 Crud completo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
