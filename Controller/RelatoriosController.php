<?php

class RelatoriosController
{
    public static function carregaPaginaRelatorios()
    {        
        include 'AbstractController.php';
        
        session_start();
        $_SESSION['paginaAtual'] = 'Relatórios';         
        $_SESSION['iconePaginaAtual'] = 'fa-solid fa-file-lines';         
        $teste = new AbstractController;
        $teste -> carregarPagina('Relatorios/relatorios');

    }
}
