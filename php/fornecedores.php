<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["razao_social"]) || trim((string)$_POST["razao_social"]) === "") $erros[] = "O campo razao_social é obrigatório."; 
if(!isset($_POST["cnpj"]) || trim((string)$_POST["cnpj"]) === "") $erros[] = "O campo cnpj é obrigatório."; 
if(!isset($_POST["telefone"]) || trim((string)$_POST["telefone"]) === "") $erros[] = "O campo telefone é obrigatório."; 
if(!isset($_POST["email"]) || trim((string)$_POST["email"]) === "") $erros[] = "O campo email é obrigatório."; 
if(!isset($_POST["cidade"]) || trim((string)$_POST["cidade"]) === "") $erros[] = "O campo cidade é obrigatório."; 

if(isset($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $erros[] = "E-mail inválido.";
if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Fornecedor cadastrado com sucesso."]);
?>
