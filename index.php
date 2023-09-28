<?php


include 'Controller/PessoaController.php';
include 'Controller/UsuarioController.php';
include 'Controller/LoginController.php';

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
    case '/pessoa':
        PessoaController::index();
        break;
    case '/pessoa/form':
        PessoaController::form();
        break;
    case '/pessoa/form/save':
        PessoaController::save();
        break;
    case '/pessoa/delete':
        PessoaController::delete();
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
    default:
        echo "Erro 404";
        break;
}
