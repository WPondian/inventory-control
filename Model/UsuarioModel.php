<?php
class UsuarioModel
{
    public $id, $nome, $telefone, $login_usuario, $senha;

    public function save()
    {

        include 'DAO/UsuarioDAO.php';

        $dao = new UsuarioDAO();

        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getById(int $id)
    {
        include 'DAO/UsuarioDAO.php';
        $dao = new UsuarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new UsuarioModel();
    }
}
