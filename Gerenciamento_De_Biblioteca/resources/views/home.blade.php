<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/header-home.css') }}">
</head>
<body>
    @include('parts.header-home')

    <div class="container-login">
        <div class="identificacao">
            <h1>Faça seu login</h1>
        </div>

        <form action="" method="post">
            @csrf <!-- Inclua o token CSRF para segurança, se estiver usando Laravel -->
            <input type="email" name="email" placeholder="Digite seu email" required>
            <input type="password" name="password" placeholder="Digite sua senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
