<?php
$servername = "localhost";  // Ou o endereço do seu servidor
$username = "root";         // Usuário do banco de dados
$password = "";             // Senha do banco
$dbname = "canatrip_bd";      // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
