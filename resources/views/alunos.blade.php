<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">

        <p>Aqui está a listagem de alunos:</p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($alunos as $aluno)
                    <tr>
                        <td>--</td>
                        <td>{{ $aluno [id]}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</body>
</html>