<?php
include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

    $stmt = $conn->prepare("INSERT INTO avaliacoes (nome, nota, comentario) VALUES (?, ?, ?)");
    $stmt->bind_param('sis', $nome, $nota, $comentario);

    if ($stmt->execute()) {
        header('Location: ../paginas/pturistico1.php');
        exit();
    } else {
        echo "Erro ao salvar a avaliação.";
    }

    $stmt->close();
    $conn->close();
}
?>
