<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

</style>

<body>
    <header>
        <h1>Crud completo</h1>
    </header>
    <main>
        <div class="main-container">
            <h2>Login</h2>
            <?php
            if (session('success')) {
                echo '<div class="alert alert-success">' . session('success') . '</div>';
            }
            if ($errors->any() && !$errors->has('password') && !$errors->has('email')) {
                echo '<div class="alert alert-danger">';
                echo $errors->first();
                echo '</div>';
            }
            if ($errors->has('email')) {
                echo '<div class="alert alert-danger">'. $errors->first('email') . '</div>';
            }
            if ($errors->has('password')) {
                echo '<div class="alert alert-danger">'. $errors->first('password') . '</div>';
            }
            ?>
            <form id="loginForm" action="{{ route('login') }}" method="POST" autocomplete="off" novalidate>
                @csrf
                <input type="text" name="fakeusernameremembered" style="display:none">
                <input type="password" name="fakepasswordremembered" style="display:none">
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="I">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Senha</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Insira a sua senha">
                    <!-- botao de esqueci a senha -->
                    <a href="{{ route('password.request') }}" class="btn btn-link">Esqueci minha senha</a>
                </div>
                <button id="loginBtn" type="submit" class="btn btn-primary">Entrar</button>
                <a href="{{ route('welcome') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </main>
    <footer>
        <p class="mt-3">&copy; 2025 Crud completo. Todos os direitos reservados.</p>
    </footer>
</body>

</html>