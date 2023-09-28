<?php
class Conexao
{

    public $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_estoque";

        $this->conexao = new PDO($dsn, 'root', '@PondianMSQL');
    }

    public  function getConexao()
    {
        return $this->conexao;
    }
}
