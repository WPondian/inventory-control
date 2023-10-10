<?php


include 'Controller/PessoaController.php';
include 'Controller/UsuarioController.php';
include 'Controller/LoginController.php';
include 'Controller/CortesController.php';

//$_SERVER['REQUEST_URI'] vai pegar a url que o usuario quer acessar
//parse_url extrai o que tem depois da barra


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/':
        PessoaController::login();
        break;
    case '/login':
        PessoaController::login();
        break;
    case '/cadastro_usuario/form/save':
        UsuarioController::save();
        break;
    case '/cadastro_usuario/form':
        include 'View/modules/CadastroUsuario/cadastro.php';
        break;
    case '/login/valida_login':
        LoginController::chamaValidaLogin();
        break;
    case '/cortes':
        CortesController::listaCortes();
        break;
    case '/deslogar':
        session_start();
        session_destroy();
        unset( $_SESSION );
        header("Location: /login");
        break;
    default:
        echo "Erro 404";
        break;
}
