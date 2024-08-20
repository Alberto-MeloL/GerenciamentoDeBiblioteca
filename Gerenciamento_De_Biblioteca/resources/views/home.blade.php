<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    @include('parts.header-home')

    <div class="container-main-home">
    <div class="container-login">
        <div class="identificacao">
            <h1>Faça seu login</h1>
        </div>

        <form class="formulario-login" action="" method="post">
            @csrf <!-- Inclua o token CSRF para segurança, se estiver usando Laravel -->
            <input class="input-login" type="email" name="email" placeholder="Digite seu email" required>
            <input class="input-login" type="password" name="password" placeholder="Digite sua senha" required>
            <input class="btn-login" type="submit" value="Entrar">
        </form>
    </div>
</div>
</body>
</html>
