<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/request-type.css'])
    <title>Tipo de Atendimento</title>
</head>
<body>
    <div class="main">
        <h1>De qual atendimento você precisa?</h1>
        <form action="/request-live-session" method="POST">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id" id="user_id" value="{{ session('id') }}">
            <label> <input type="radio" name="tipo_atendimento" value="Emergência"> Emergência </label>
            <label> <input type="radio" name="tipo_atendimento" value="Atendimento Imediato"> Atendimento Imediato </label>
            <label> <input type="radio" name="tipo_atendimento" value="Ajuda"> Ajuda </label>
            <button type="submit">Falar com um atendente</button>
            <small class="time-remaining">Tempo médio de espera 1:00 min</small>
        </form>
    </div>
    <div class="aside"></div>
</body>
</html>