<?php

class LoginController
{
    public static function chamaValidaLogin()
    {
        session_start();
        include 'Model/LoginModel.php';

        $model = new LoginModel();
        $model->usuario = $_POST['login'];
        $model->senha = $_POST['senha'];
        $resultadoValidacao = $model->validaLogin();

        if ($resultadoValidacao) {
            $_SESSION['erroLogin'] = false;
            $_SESSION['nomeUsuario'] = $resultadoValidacao['nome'];

            include 'View/modules/Inicio/inicio.php';
        } else {
            unset($_SESSION['nomeUsuario']);

            $_SESSION['erroLogin'] = true;
            
            include 'View/modules/Login/login.php';
        }
    }
}
