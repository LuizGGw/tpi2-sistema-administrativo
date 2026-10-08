<?php
header('Content-Type: application/json; charset=utf-8');
$erros = [];
if(!isset($_POST["pedido"]) || trim((string)$_POST["pedido"]) === "") $erros[] = "O campo pedido é obrigatório."; 
if(!isset($_POST["produto"]) || trim((string)$_POST["produto"]) === "") $erros[] = "O campo produto é obrigatório."; 
if(!isset($_POST["quantidade"]) || trim((string)$_POST["quantidade"]) === "") $erros[] = "O campo quantidade é obrigatório."; 
if(!isset($_POST["preco_unitario"]) || trim((string)$_POST["preco_unitario"]) === "") $erros[] = "O campo preco_unitario é obrigatório."; 
if(!isset($_POST["subtotal"]) || trim((string)$_POST["subtotal"]) === "") $erros[] = "O campo subtotal é obrigatório."; 
if(isset($_POST["quantidade"]) && !is_numeric($_POST["quantidade"])) $erros[] = "O campo quantidade deve ser numérico.";if(isset($_POST["preco_unitario"]) && !is_numeric($_POST["preco_unitario"])) $erros[] = "O campo preco_unitario deve ser numérico.";if(isset($_POST["subtotal"]) && !is_numeric($_POST["subtotal"])) $erros[] = "O campo subtotal deve ser numérico.";

if ($erros) {
    echo json_encode(["sucesso"=>false, "mensagem"=>implode(" ", $erros)]);
    exit;
}
echo json_encode(["sucesso"=>true, "mensagem"=>"Item do pedido cadastrado com sucesso."]);
?>
