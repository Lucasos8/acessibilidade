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
        <form action="">
            <label> <input type="radio" name="atendimento"> Emergência </label>
            <label> <input type="radio" name="atendimento"> Atendimento Imediato </label>
            <label> <input type="radio" name="atendimento"> Ajuda </label>
            <button type="submit">Falar com um atendente</button>
            <small class="time-remaining">Tempo médio de espera 1:00 min</small>
        </form>
    </div>
    <div class="aside"></div>
</body>
</html>