<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/Aluno/formAlunos?tipo=1">Inserir</a>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>RA</th>
            <th>URL Git</th>
            <th>-</th>
            <th>-</th>           
        </thead>
        <tbody>
            <?php foreach($alunos as $aluno): ?>
                <tr>
                    <td><?= $aluno->id ?></td>
                    <td><?= $aluno->nome ?></td>
                    <td><?= $aluno->ra ?></td>
                    <td><?= $aluno->urlgit ?></td>
                    <td><a href="/Aluno/formAlunos?tipo=0&id=<?= $aluno->id ?>">Alterar</a></td>
                    <td><a href="/Aluno/excluiRegistro?&id=<?= $aluno->id ?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
