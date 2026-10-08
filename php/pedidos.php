<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["cliente"]) || trim((string)$_POST["cliente"]) === "") $erros[] = "O campo cliente é obrigatório."; 
if(!isset($_POST["data"]) || trim((string)$_POST["data"]) === "") $erros[] = "O campo data é obrigatório."; 
if(!isset($_POST["forma_pagamento"]) || trim((string)$_POST["forma_pagamento"]) === "") $erros[] = "O campo forma_pagamento é obrigatório."; 
if(!isset($_POST["desconto"]) || trim((string)$_POST["desconto"]) === "") $erros[] = "O campo desconto é obrigatório."; 
if(!isset($_POST["frete"]) || trim((string)$_POST["frete"]) === "") $erros[] = "O campo frete é obrigatório."; 
if(isset($_POST["desconto"]) && !is_numeric($_POST["desconto"])) $erros[] = "O campo desconto deve ser numérico.";if(isset($_POST["frete"]) && !is_numeric($_POST["frete"])) $erros[] = "O campo frete deve ser numérico.";

if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Pedido cadastrado com sucesso."]);
?>
