<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar nome, email e senha</h1>
    <?php
    if(session('status')) { echo '<div style="color:green">'.session('status').'</div>'; }
    if(session('success')) { echo '<div style="color:green">'.session('success').'</div>'; }
    if($errors->any()) { echo '<div style="color:red">'.$errors->first().'</div>'; }
    ?>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div>
            <label>Email atual (para identificar a conta)</label>
            <input type="email" name="current_email" value="{{ old('current_email') }}" required autofocus>
        </div>

        <div>
            <label>Novo nome</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label>Novo email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label>Nova senha</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Confirmar nova senha</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Salvar</button>
        <a href="{{ route('login') }}">Voltar ao login</a>
    </form>
</body>
</html>