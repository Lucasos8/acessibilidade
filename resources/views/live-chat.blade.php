<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/live-chat.css'])
</head>
<body>
  
    <header>
        <h2 class="request-type">Atendimento ao Cliente</h2>
        <p class="attendant">Atendente Cláudia Dias</p>
    </header>
    <video id="webcamVideo" class="webcamVideo" autoplay playsinline></video>
    <video id="remoteVideo" class="remoteVideo" autoplay playsinline></video>

    <footer>
        <button class="hangup-call" id="hangupButton" disabled>Encerrar Chamada</button>
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>