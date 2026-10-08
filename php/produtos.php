<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["nome"]) || trim((string)$_POST["nome"]) === "") $erros[] = "O campo nome é obrigatório."; 
if(!isset($_POST["categoria"]) || trim((string)$_POST["categoria"]) === "") $erros[] = "O campo categoria é obrigatório."; 
if(!isset($_POST["fornecedor"]) || trim((string)$_POST["fornecedor"]) === "") $erros[] = "O campo fornecedor é obrigatório."; 
if(!isset($_POST["preco"]) || trim((string)$_POST["preco"]) === "") $erros[] = "O campo preco é obrigatório."; 
if(!isset($_POST["estoque"]) || trim((string)$_POST["estoque"]) === "") $erros[] = "O campo estoque é obrigatório."; 
if(isset($_POST["preco"]) && !is_numeric($_POST["preco"])) $erros[] = "O campo preco deve ser numérico.";if(isset($_POST["estoque"]) && !is_numeric($_POST["estoque"])) $erros[] = "O campo estoque deve ser numérico.";

if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Produto cadastrado com sucesso."]);
?>
