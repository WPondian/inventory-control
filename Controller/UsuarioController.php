<?php

class UsuarioController
{
    public static function save()
    {
        include 'Model/UsuarioModel.php';

        $model = new UsuarioModel();
        $model->nome = $_POST['nome'];
        $model->telefone = $_POST['telefone'];
        $model->login_usuario = $_POST['login_usuario'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /login");
    }
    public static function form()
    {
        include "Model/UsuarioModel.php";
        $model = new UsuarioModel();

        if (isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }

        include 'View/modules/CadastroUsuario/cadastro.php';
    }
}
