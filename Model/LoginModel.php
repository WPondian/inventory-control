<?php

class LoginModel
{
    public $usuario, $senha;

    public function validaLogin()
    {
        include 'DAO/LoginDAO.php';
        $dao = new LoginDAO();

        $obj = $dao->verificaLoginBanco($this);

        return $obj;
    }
}
