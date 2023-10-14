<?php

class InicioController
{
    public static function carregaPaginaInicio()
    {        
        include 'AbstractController.php';
        
        session_start();
        $_SESSION['paginaAtual'] = 'Início';         
        $_SESSION['iconePaginaAtual'] = 'fas fa-home';         
        $teste = new AbstractController;
        $teste -> carregarPagina('Inicio/inicio');

    }
}
