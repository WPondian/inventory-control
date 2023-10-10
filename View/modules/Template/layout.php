<?php 
    session_start();

    if(!$_SESSION['usuarioLogado']){
        header("Location: /login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../src/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../src/css/fontAwesome/all.min.css">
    <link rel="shortcut icon" type="imagex/png" href="../../../src/img/icone-aba.svg">
    @head-html
</head>

<body class="background__inicio text-center">
    <header class="flex justify-between">
        <div class="flex justify-center items-center bg-white h-12 w-28 rounded-br-lg">
            <button type="button" class="font-bold text-lg h-14 w-28 text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:rounded-br-lg hover:bg-gray-100 duration-300" name="btnMenu">Menu <em class="fa-solid fa-bars"></em></button>
        </div>
        <div class="flex justify-center items-center bg-white h-12 w-1/3 rounded-b-lg rounded-bl-lg">
            <h2 class="w-96 font-bold text-2xl text-cor-paleta-2 uppercase">Cortes<em class="fa-solid fa-boxes-stacked ml-4"></em></h2>
        </div>
        <div class="flex justify-center items-center bg-white h-12 w-28 rounded-bl-lg">
            <form action="/deslogar" method="post">
                <button type="submit" class="font-bold h-14 w-28 text-lg text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:rounded-bl-lg hover:bg-gray-100 duration-300" name="btnDeslogar"><em class="fa-solid fa-door-open"></em> Sair</button>
            </form>
        </div>
    </header>
    <!-------------Menu------------->
    <section class="absolute left-0 top-1/4 bg-white rounded-r-lg w-14">
        <ul>
            <li class="font-bold py-4 text-xl border-l-8 border-solid border-cor-paleta-4 text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-115 hover:rounded-tr-lg hover:bg-gray-100 duration-300">
                <a class="p-3" href="#"><em class="fa-solid fa-boxes-stacked"></em></a>
                <a class="hidden" href="#">Cortes</a>
            </li>
            <li class="font-bold py-4 text-xl text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-115 hover:bg-gray-100 duration-300">
                <a class="p-3" href="#"><em class="fa-solid fa-users"></em></a>
                <a class="hidden" href="#">Costureiras</a>
            </li>
            <li class="font-bold py-4 text-xl text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-115 hover:bg-gray-100 duration-300">
                <a class="p-3" href="#"><em class="fa-solid fa-file-lines"></em></a>
                <a class="hidden" href="#">Relatorios</a>
            </li>
            <li class="font-bold py-4 text-xl text-cor-paleta-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-115 hover:rounded-br-lg hover:bg-gray-100 duration-300">
                <a class="p-3" href="#"><em class="fa-solid fa-user-pen"></em></a>
                <a class="hidden" href="#">Perfil</a>
            </li>
        </ul>
    </section>
    
    <main id="conteudoPrincipal" class="flex justify-center mt-10">
        @body-html
    </main>
</body>
<script src="../../../src/js/fontAwesome/all.min.js?random=<?= uniqid() ?>"></script>

</html>