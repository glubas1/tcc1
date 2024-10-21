<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$email = $conn->real_escape_string($email);
$senha = $conn->real_escape_string($senha);


$sql_adm = "SELECT * FROM administradores WHERE Email='$email' AND Senha='$senha'";
$result_adm = $conn->query($sql_adm);

$sql_cli = "SELECT * FROM clientes WHERE Email='$email' AND Senha='$senha'";
$result_cli = $conn->query($sql_cli);

if ($result_adm->num_rows > 0 or $result_cli->num_rows > 0) {
    
    $user = $result_adm->fetch_assoc();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;

    
    if ($email == 'samuelgomezpatricio@gmail.com' && $senha == '1234') {
        $_SESSION['is_admin'] = true;
    } else {
        $_SESSION['is_admin'] = false;
    }

    header("Location: ../index.php");
} else {
   
    echo "Login falhou. Usuário ou senha incorretos.";
}

$conn->close();
?>
