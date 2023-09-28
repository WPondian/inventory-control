<?php

require 'conexao.php';

class LoginDAO
{
    private $conexao;

    public function __construct()
    {
        $teste = new Conexao;
        $this->conexao = $teste->getConexao();
    }

    public function verificaLoginBanco(loginModel $model)
    {
        include_once "Model/LoginModel.php";

        try {
            $sql = "SELECT nome FROM usuario WHERE login_usuario = ? AND senha = ? LIMIT 1";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->usuario);
            $stmt->bindValue(2, $model->senha);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }
}
