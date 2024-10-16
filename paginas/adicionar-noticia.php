<?php
// Inclui a conexão com o banco de dados
require_once '../php/conexao.php';  // Ajuste o caminho conforme necessário

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $conteudo = $_POST['conteudo'];
    $data_publicacao = $_POST['data_publicacao'];

    // Verifica se o diretório de upload existe, se não, cria
    $diretorio = "uploads/";
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0755, true);  // Cria o diretório com permissões
    }

    // Upload da imagem
    $imagem = $diretorio . basename($_FILES["imagem"]["name"]);
    
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem)) {
        // Preparar a consulta SQL usando prepared statement
        $sql = "INSERT INTO noticias (titulo, categoria, conteudo, data_publicacao, imagem) 
                VALUES (?, ?, ?, ?, ?)";
        
        // Preparar e executar a consulta SQL
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssss", $titulo, $categoria, $conteudo, $data_publicacao, $imagem);
            
            if ($stmt->execute()) {
                echo "Notícia adicionada com sucesso!";
                header('Location: noticias.php');
            } else {
                echo "Erro ao adicionar notícia: " . $stmt->error;
            }
            
            $stmt->close();
        } else {
            echo "Erro ao preparar a consulta: " . $conn->error;
        }
    } else {
        echo "Erro ao enviar a imagem.";
    }

    // Fechar a conexão
    $conn->close();
}
?>
