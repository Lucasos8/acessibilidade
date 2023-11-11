<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas Abertas</title>
</head>
<body>
    <main>

    </main>
    <script>
        const createLink = (room) => {
            const el = document.createElement("a")
            el.href = `/atendente/sala/${room.id_sala}`
            el.textContent = `${room.nome}(${room.tipo_atendimento})`
            return el
        }

        fetch("/get-active-sessions").then(raw => raw.json()).then(data => {
            const container = document.querySelector("main")
            data.forEach(room => {
                const link = createLink(room)
                container.append(link)
            })

        })
    </script>
</body>
</html>