<?php

class CortesController
{
    public static function listaCortes()
    {        
        include 'AbstractController.php';
        $teste = new AbstractController;
        $teste -> carregarPagina('Cortes/cortes');
    }
}
