<?php

require_once ("config.php");

//Consulta geral na tb_usuarios
//    $sql = new Sql();
//    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
//    echo json_encode($usuarios);

//Retorna um usuário pelo ID
//$usuario = new Usuario();
//    $usuario->loadById(8);
//    echo $usuario;

//Retorna uma lista de usuários
//    $lista = Usuario::getList();
//    echo json_encode($lista);

//Retorna uma lista de usuário buscando por parte do login
//    $search = Usuario::search("jo");
//    echo json_encode($search);

//Retorna uma lista de usuário logado
//    $usuario = new Usuario();
//    $usuario->login("Jose", "44444");
//    echo $usuario;

//Inserir um usuário por Stored Procedure de Banco
//    $usuario = new Usuario("Ricardo", "1254");
//    $usuario->insert();
//    echo $usuario;

//Atualizar o Login ou Senha do Usuário pelo ID
//    $usuario = new Usuario();
//    $usuario->loadById(8);
//    $usuario->update("Rafaela","Antonella");

//Excluindo usuário por ID
//    $usuario = new Usuario();
//    $usuario->loadById(10);
//    $usuario->delete();