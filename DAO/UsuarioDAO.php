<?php

require 'conexao.php';

class UsuarioDAO
{
    private $conexao;

    public function __construct()
    {
        $teste = new Conexao;
        $this->conexao = $teste->getConexao();
    }

    public function insert(UsuarioModel $model)
    {
        $sql = "INSERT INTO usuario (nome, telefone, login_usuario, senha) VALUES (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->telefone);
        $stmt->bindValue(3, $model->login_usuario);
        $stmt->bindValue(4, $model->senha);

        $stmt->execute();
    }

    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE usuario SET nome=?, telefone=?, login_usuario=?, senha=?  WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->telefone);
        $stmt->bindValue(3, $model->login_usuario);
        $stmt->bindValue(4, $model->senha);
        $stmt->bindValue(5, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once "Model/UsuarioModel.php";

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("UsuarioModel");
    }
}
