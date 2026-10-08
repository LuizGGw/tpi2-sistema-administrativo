<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["nome"]) || trim((string)$_POST["nome"]) === "") $erros[] = "O campo nome é obrigatório."; 
if(!isset($_POST["email"]) || trim((string)$_POST["email"]) === "") $erros[] = "O campo email é obrigatório."; 
if(!isset($_POST["senha"]) || trim((string)$_POST["senha"]) === "") $erros[] = "O campo senha é obrigatório."; 
if(!isset($_POST["perfil"]) || trim((string)$_POST["perfil"]) === "") $erros[] = "O campo perfil é obrigatório."; 
if(!isset($_POST["status"]) || trim((string)$_POST["status"]) === "") $erros[] = "O campo status é obrigatório."; 

if(isset($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $erros[] = "E-mail inválido.";
if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Usuário cadastrado com sucesso."]);
?>
