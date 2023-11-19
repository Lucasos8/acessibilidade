<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/build/assets/app-0b75ff92.css">
    <link rel="stylesheet" href="/build/assets/live-chat-5d88c471.css">
</head>
<body>
  
    <header>
        <h2 class="request-type">{{session('tipo_atendimento')}}</h2>
        <p class="attendant">Buscando Atendente</p>
    </header>
    <video id="webcamVideo" class="webcamVideo" autoplay playsinline></video>
    <video id="remoteVideo" class="remoteVideo" autoplay playsinline></video>

    <footer>
        <button class="hangup-call" id="hangupButton">Encerrar Chamada</button>
    </footer>

    <input type="hidden" name="userId" id="userId" value="{{ session('id') }}">

    <script src="/build/assets/app-8cb12f3c.js"></script>
</body>
</html>