<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/login.css'])
    <title>Login</title>
</head>
<body>
    <div class="aside">
        <div class="text">
            <h1>Bem-vindo</h1>  
        </div>
        <button>voltar</button>
    </div>
    <div class="main">
        <form action="/atendente/login" method="POST">
            <label for="usuario">Nome de usuário</label>
            <input type="text" id="user" name="usuario" placeholder="Nome de usuario">

            <label for="senha">Senha de acesso</label>
            <input type="password" id="senha" name="senha" placeholder="Senha de Acesso">
            
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>