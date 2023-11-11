<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas Abertas</title>
</head>
<body>
    <main>
        <table>
            <thead>
                <th>Nome Cliente</th>
                <th>Tipo de Atendimento</th>
                <th>Link</th>
            </thead>
            <tbody></tbody>
        </table>
    </main>
    <script>
        const createLink = link => {
            const aTag = document.createElement("a");
            aTag.href = link
            aTag.textContent = "Acessar a Sala"
            return aTag
        }
        fetch("/get-active-sessions").then(raw => raw.json()).then(data => {
            const table = document.querySelector("table")
            data.forEach(room => {
                let row = table.insertRow();
                
                let nome = row.insertCell();
                let tipoAtendimento = row.insertCell();
                let link = row.insertCell();
                
                nome.textContent = room.nome
                tipoAtendimento.textContent = room.tipo_atendimento
                link.append(createLink(`/atendente/sala/${room.id_sala}`))

            })

        })
    </script>
</body>
</html>