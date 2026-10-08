<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["nome"]) || trim((string)$_POST["nome"]) === "") $erros[] = "O campo nome é obrigatório."; 
if(!isset($_POST["cpf"]) || trim((string)$_POST["cpf"]) === "") $erros[] = "O campo cpf é obrigatório."; 
if(!isset($_POST["email"]) || trim((string)$_POST["email"]) === "") $erros[] = "O campo email é obrigatório."; 
if(!isset($_POST["telefone"]) || trim((string)$_POST["telefone"]) === "") $erros[] = "O campo telefone é obrigatório."; 
if(!isset($_POST["endereco"]) || trim((string)$_POST["endereco"]) === "") $erros[] = "O campo endereco é obrigatório."; 

if(isset($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $erros[] = "E-mail inválido.";
if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Cliente cadastrado com sucesso."]);
?>
