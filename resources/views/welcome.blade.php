<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <title>Crud completo</title>
    <!-- link favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">

    <style>
        
        
    </style>
</head>
<body>
    <header>
        <h1>Crud completo</h1>
    </header>
    <main>
        <div class="main-container cont">
            <img src="{{ asset('assets/logo.jpg') }}" alt="Logo principal">
            <h4 class="mt-4">Bem-vindo ao sistema de CRUD completo!</h4>
            <h5 class="mt-4">Entre ou Cadastre-se</h5>
            <div class="auth-links">
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                <a href="{{ route('users.create') }}" class="btn btn-secondary">Cadastrar</a>
            </div>
        </div>
    </main>
    <footer>
        <p class="mt-3">&copy; 2025 Crud completo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>