<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["nome"]) || trim((string)$_POST["nome"]) === "") $erros[] = "O campo nome é obrigatório."; 
if(!isset($_POST["descricao"]) || trim((string)$_POST["descricao"]) === "") $erros[] = "O campo descricao é obrigatório."; 
if(!isset($_POST["codigo"]) || trim((string)$_POST["codigo"]) === "") $erros[] = "O campo codigo é obrigatório."; 
if(!isset($_POST["responsavel"]) || trim((string)$_POST["responsavel"]) === "") $erros[] = "O campo responsavel é obrigatório."; 
if(!isset($_POST["status"]) || trim((string)$_POST["status"]) === "") $erros[] = "O campo status é obrigatório."; 


if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Categoria cadastrada com sucesso."]);
?>
