<?php

include 'Controller/UsuarioController.php';
include 'Controller/LoginController.php';
include 'Controller/InicioController.php';
include 'Controller/CortesController.php';
include 'Controller/CostureirasController.php';
include 'Controller/RelatoriosController.php';
include 'Controller/PerfilController.php';

//$_SERVER['REQUEST_URI'] vai pegar a url que o usuario quer acessar
//parse_url extrai o que tem depois da barra

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        LoginController::login();
        break;
    case '/login':
        LoginController::login();
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
    case '/inicio':
        InicioController::carregaPaginaInicio();
        break;
    case '/cortes':
        CortesController::carregaPaginaCortes();
        break;
    case '/costureiras':
        CostureirasController::carregaPaginaCostureiras();
        break;
    case '/relatorios':
        RelatoriosController::carregaPaginaRelatorios();
        break;
    case '/perfil':
        PerfilController::carregaPaginaPerfil();
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
