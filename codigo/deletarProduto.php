<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "DELECT FROM produto WHERE idproduto = $id";

mysqli_query($conexao, $sql);

header("location: ./listarProduto.php");
?>