<?php

class PerfilController
{
    public static function carregaPaginaPerfil()
    {        
        include 'AbstractController.php';
        
        session_start();
        $_SESSION['paginaAtual'] = 'Perfil';         
        $_SESSION['iconePaginaAtual'] = 'fa-solid fa-user-pen';         
        $teste = new AbstractController;
        $teste -> carregarPagina('Perfil/perfil');

    }
}
