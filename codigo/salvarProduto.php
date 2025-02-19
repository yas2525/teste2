<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$margem_lucro = $_POST['margem_lucro'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO tb_produto (nome, tipo, preco_compra, preco_venda, margem_lucro, quantidade) VALUES ('$nome', '$tipo', '$preco_compra',
 '$preco_venda', '$margem_lucro', '$quantidade')";

mysqli_query($conexao, $sql);
?>