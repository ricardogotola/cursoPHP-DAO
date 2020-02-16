<?php

require_once ("config.php");

//Consulta geral na tb_usuarios
//    $sql = new Sql();
//    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
//    echo json_encode($usuarios);

//$root = new Usuario();
//    $root->loadById(3);
//    echo $root;

//Retorna uma lista de usuários
//    $lista = Usuario::getList();
//    echo json_encode($lista);

//Retorna uma lista de usuário buscando por parte do login
//    $search = Usuario::search("jo");
//    echo json_encode($search);

//Retorna uma lista de usuário logado
    $usuario = new Usuario();
    $usuario->login("Jose", "44444");
    echo $usuario;