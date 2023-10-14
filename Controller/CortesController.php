<?php

class CortesController
{
    public static function carregaPaginaCortes()
    {        
        include 'AbstractController.php';
        
        session_start();
        $_SESSION['paginaAtual'] = 'Cortes'; 
        $_SESSION['iconePaginaAtual'] = 'fa-solid fa-boxes-stacked';      
        $teste = new AbstractController;
        $teste -> carregarPagina('Cortes/cortes');

    }
}
