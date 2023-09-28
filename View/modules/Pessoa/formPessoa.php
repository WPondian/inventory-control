<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Cadastro de Pessoa</title>
    <style>
        label,
        input {
            display: block;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .mb-5 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>
        <form method="post" action="/pessoa/form/save">
            <input type="hidden" value="<?= $model->id ?>" name="id">

            <label for="nome">Nome:</label>
            <input type="text" value="<?= $model->nome ?>" id="nome" name="nome">

            <label for="cpf">CPF:</label>
            <input type="text" value="<?= $model->cpf ?>" name="cpf" id="cpf" maxlength="11">

            <label for="data_nascimento">Data nascimento:</label>
            <input type="date" value="<?= $model->data_nascimento ?>" id="data_nascimento" class="mb-5" name="data_nascimento">
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>

</html>