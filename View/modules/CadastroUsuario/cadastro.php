<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../src/css/output.css" rel="stylesheet">
    <title>Cadastro Usuario</title>
</head>

<body class="background__cadastro">
    <main class="grid grid-cols-3 justify-between">
        <section>
        </section>
        <section class="mt-6">
            <form class="flex flex-col items-center gap-3" method="post" action="/cadastro_usuario/form/save">
                <h2 class="w-96 font-bold text-2xl text-center italic text-cor-paleta-3 uppercase">Preencha as informações e crie seu cadastro. &#128640;</h2>
                <label class="text-white w-96 font-bold text-lg" for="nome">Nome:</label>
                <input class="p-2 w-96 rounded" type="text" value="" id="nome" name="nome" maxlength="50">

                <label class="text-white w-96 font-bold text-lg" for="telefone">Telefone:</label>
                <input class="p-2 w-96 rounded" type="text" value="" id="telefone" name="telefone" maxlength="15">

                <label class="text-white w-96 font-bold text-lg" for="login_usuario">Usuário:</label>
                <input class="p-2 w-96 rounded" type="text" value="" id="login_usuario" name="login_usuario" maxlength="50">

                <label class="text-white w-96 font-bold text-lg" for="senha">Senha:</label>
                <input class="p-2 w-96 rounded" type="password" value="" id="senha" name="senha" maxlength="50">

                <button class="text-white w-52 text-lg hover:text-cor-paleta-1 hover:border-cor-paleta-1 font-bold border-solid border-2 rounded-full py-2 mt-6" type="submit">Salvar</button>
            </form>
        </section>
        <section class="mt-6">
            <form class="grid grid-cols-1 justify-end" action="/" method="post">
                <div class="text-right mb-4 mx-4">
                    <button class="text-white w-52 text-lg hover:text-cor-paleta-1 hover:border-cor-paleta-1 font-bold border-solid border-2 rounded-full py-2" type="submit">
                        &#8592; Voltar
                    </button>
                </div>
            </form>
        </section>
    </main>
    <footer class="absolute bottom-0 right-0">
        <div class="mb-4 mx-4">
            <p class="font-bold text-center italic text-cor-paleta-3">&copy <?= date('Y') ?> Willian Pondian</p>
        </div>
    </footer>
</body>

</html>