<?php

require 'conexao.php';

class CortesDAO
{
    private $conexao;

    public function __construct()
    {
        $teste = new Conexao;
        $this->conexao = $teste->getConexao();
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}