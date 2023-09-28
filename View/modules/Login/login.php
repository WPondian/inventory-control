<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../src/css/output.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <main class="min-h-screen flex flex-col justify-center items-center background__login">
        <?php if (isset($_SESSION['erroLogin']) && $_SESSION['erroLogin']) { ?>
            <section class="absolute top-36">
                <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p>Login ou senha inválido!</p>
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                        <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>
            </section>
        <?php } ?>
        <section class="border-solid border-2 rounded p-10 w-1/4 border-white">
            <form class="flex flex-col gap-3" action="/login/valida_login" method="post">
                <label class="text-white font-bold text-lg" for="login">Login:</label>
                <input class="p-2 rounded" type="text" id="login" name="login" maxlength="50">

                <label class="text-white font-bold text-lg" for="senha">Senha:</label>
                <input class="p-2 rounded" type="password" id="senha" name="senha" maxlength="50">

                <button class="text-white transition ease-in-out delay-150 bg-gray-400 hover:-translate-y-1 hover:scale-110 hover:text-cor-paleta-1 hover:border-cor-paleta-1 hover:bg-gray-300 duration-300 text-lg font-bold border-solid border-2 rounded-full py-2 mt-4" type="submit">Entrar</button>
            </form>

            <form action="/cadastro_usuario/form" class="flex flex-col gap-3">
                <button class="text-white transition ease-in-out delay-150 bg-gray-400 hover:-translate-y-1 hover:scale-110 hover:text-cor-paleta-1 hover:border-cor-paleta-1 hover:bg-gray-300 duration-300 text-lg font-bold border-solid border-2 rounded-full py-2 mt-11" type="submit">Cadastrar</button>
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