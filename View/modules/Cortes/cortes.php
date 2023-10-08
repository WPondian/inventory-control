<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../src/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../src/css/fontAwesome/all.min.css">
    <link rel="shortcut icon" type="imagex/png" href="../../../src/img/icone-aba.svg">
    <title>Cortes</title>
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
    <main class="flex flex-col justify-center items-center mt-20">
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
        <!-------------Filtros------------->
        <section class="bg-slate-200 w-5/6">
            <div class="col-span-3">
                <h3 class="text-left ml-20 mt-20 font-bold text-xl text-cor-paleta-2 uppercase">Lista de cortes</h3>
            </div>
            <div class="col-span-3">
                <h3 class="text-left ml-20 mt-20 font-bold text-lg text-cor-paleta-2 uppercase">Filtros :</h3>
            </div>
            <div class="col-span-3 items-end ml-20 flex gap-8 my-8">
                <div>
                    <label for="nomeCorte" class="block text-left text-cor-paleta-2 font-medium text-lg">Nome Corte:</label>
                    <input type="text" name="nomeCorte" id="nomeCorte" class="mt-1 focus:border-teal focus:outline-none p-2 px-3 w-full rounded-full active:text-yellow-400" maxlength="50">
                </div>
                <div>
                    <label for="opCorte" class="block text-left text-cor-paleta-2 font-medium text-lg">Ordem de Produção(O.P):</label>
                    <input type="text" name="opCorte" id="opCorte" class="mt-1 focus:border-teal focus:outline-none p-2 px-3 w-full rounded-full" maxlength="50">
                </div>
                <div>
                    <label for="referenciaCorte" class="block text-left text-cor-paleta-2 font-medium text-lg">Referencia:</label>
                    <input type="text" name="referenciaCorte" id="referenciaCorte" class="mt-1 p-2 px-3 w-full rounded-full focus:border-teal focus:outline-none" maxlength="50">
                </div>
                <div class="ml-auto mr-8">
                    <button type="button" name="btnBuscarCorte" id="btnBuscarCorte" class="inline-block shrink-0 rounded-full border border-cor-paleta-2 bg-cor-paleta-2 px-12 py-2 text-lg font-medium text-white transition hover:bg-transparent hover:text-cor-paleta-2 focus:outline-none focus:ring active:text-cor-paleta-2">
                        Buscar
                    </button>
                </div>
            </div>
        </section>
        <!-------------Tabela------------->
        <section class="bg-slate-200 w-5/6">
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right bg-blue-800">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Date of Birth
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Role
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Salary
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                John Doe
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                        </tr>

                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Jane Doe
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">04/11/1980</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Designer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$100,000</td>
                        </tr>

                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Gary Barlow
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
<script src="../../../src/js/fontAwesome/all.min.js?random=<?= uniqid() ?>"></script>

</html>