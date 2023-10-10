<head-pagina>
    <title>Cortes</title>
</head-pagina>

<body-pagina>
    <section class="bg-slate-200 w-5/6 min-h-[80vh] my-auto border rounded-lg">
        <!-------------Filtros------------->
        <section>
            <div>
                <h3 class="text-left ml-14 mt-14 font-bold text-3xl text-cor-paleta-2 uppercase italic">Lista de cortes</h3>
            </div>
            <div>
                <h3 class="text-left ml-14 mt-14 font-bold text-lg text-cor-paleta-2 uppercase">Filtros :</h3>
            </div>
            <div class="items-end ml-14 flex gap-8 my-8">
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
                <div>
                    <button type="button" name="btnBuscarCorte" id="btnBuscarCorte" class="inline-block shrink-0 rounded-full border border-cor-paleta-2 bg-cor-paleta-2 px-12 py-2 text-base font-bold text-white transition hover:bg-transparent hover:text-cor-paleta-2 active:text-cor-paleta-2">
                        Buscar
                    </button>
                </div>
                <div class="ml-auto mr-14">
                    <button type="button" name="btnBuscarCorte" id="btnBuscarCorte" class="inline-block shrink-0 rounded-full border border-cor-paleta-2 bg-cor-paleta-2 px-12 py-2 text-base font-bold text-white transition hover:bg-transparent hover:text-cor-paleta-2 active:text-cor-paleta-2">
                        <em class="fa-solid fa-plus"></em> Cadastrar
                    </button>
                </div>
            </div>
        </section>
        <!-------------Tabela------------->
        <section>
            <div class="overflow-x-auto rounded-lg mx-14">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right bg-cor-paleta-5">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-bold text-base text-white">
                                Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-bold text-base text-white">
                                Date of Birth
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-bold text-base text-white">
                                Role
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-bold text-base text-white">
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
    </section>
</body-pagina>