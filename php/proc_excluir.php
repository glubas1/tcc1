<?php

include "conexao.php";

$id = $_GET['id'];
$sql =  "DELETE FROM clientes WHERE id='$id'";




$conexao->query($sql);

header("Location: ../paginas/adm.php");
















?>