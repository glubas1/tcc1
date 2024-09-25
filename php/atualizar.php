<?php
include "conexao.php";

$id = $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = "UPDATE clientes SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";

mysqli_query($conexao,$sql);

header('Location: ../paginas/adm.php');



?>