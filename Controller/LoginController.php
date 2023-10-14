<?php

class LoginController
{
    public static function chamaValidaLogin()
    {
        $dadosRequisicao = file_get_contents("php://input");
        $dadosRequisicao = json_decode($dadosRequisicao);

        include 'Model/LoginModel.php';
        
        $model = new LoginModel();
        $model->usuario = $dadosRequisicao->login;
        $model->senha = $dadosRequisicao->senha;
        $resultadoValidacao = $model->validaLogin();
        
        if ($resultadoValidacao) {
            session_start();
            $_SESSION['erroLogin'] = false;
            $_SESSION['usuarioLogado'] = true;
            $_SESSION['nomeUsuario'] = $resultadoValidacao['nome'];
            $_SESSION['paginaAtual'] = 'Inicio'; 
            $teste = (object)['erro' => false, 'mensagem' => 'Sucesso'];

            echo json_encode($teste);
        } else {
            unset($_SESSION['nomeUsuario']);

            $_SESSION['usuarioLogado'] = false;
            $_SESSION['erroLogin'] = true;

            $teste = (object)['erro' => true, 'mensagem' => 'Erro'];

            echo json_encode($teste);
        }
    }
    
    public static function login()
    {
        include 'View/modules/Login/login.php';
    }

}
