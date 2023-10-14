<?php

class CostureirasController
{
    public static function carregaPaginaCostureiras()
    {        
        include 'AbstractController.php';
        
        session_start();
        $_SESSION['paginaAtual'] = 'Costureiras';         
        $_SESSION['iconePaginaAtual'] = 'fa-solid fa-users';         
        $teste = new AbstractController;
        $teste -> carregarPagina('Costureiras/costureiras');

    }
}
