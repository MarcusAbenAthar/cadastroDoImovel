<?php

require_once '../model/Usuario.php';

class UsuarioController extends Usuario
{
    /** 
     * Salvar o usuario submetido pelo form 
     */

    public function salvar()
    {
        //cria um objeto do tipo Usuario
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        $usuario->save();
    }

    public function listar()
    {
        //cria um objeto do tipo Usuario
        $usuarios = new Usuario();

        return $usuarios->listAll();
    }

    public function editar()
    {
        $editUsuarios = new Usuario();
        $editUsuarios->setId($_POST['id']);
        $editUsuarios->setLogin($_POST['login']);
        $editUsuarios->setSenha($_POST['senha']);
        $editUsuarios->setPermissao($_POST['permissao']);
        return $editUsuarios->edit();
    }

    public function encontrar()
    {
        $editUsuarios = new Usuario();

        return $editUsuarios->find();
    }
}
