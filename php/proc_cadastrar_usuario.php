<?php
include 'conexao.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

// Evitar SQL Injection
$nome = $conexao->real_escape_string($nome);
$senha = $conexao->real_escape_string($senha);
$email = $conexao->real_escape_string($email);

// Inserir novo usuário no banco de dados
$sql = "INSERT INTO clientes (Nome, Email, Senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso.";
    header("Location: ../paginas/login.php"); // Redirecionar para a página de login
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
