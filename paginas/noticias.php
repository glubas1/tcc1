<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canatrip</title>
  <link rel="shortcut icon" href="../img/canaverde-removebg-preview.png" type="image/x-icon"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<style>
    .card-img-top {
        height: 300px;
        object-fit: cover; 
    }
    body{
        background-image: url(../img/fundoponto.png);
        
    
        
    }
    .card-news {
        border: 1px solid #ddd; 
        border-radius: 10px; 
        padding: 20px;
        margin-bottom: 20px;
        background-color: white;
    }
    .card-img-left {
        max-width: 300px;
        object-fit: cover;
        border-radius: 10px 0 0 10px; 
    }
    .card-title {
        font-weight: bold;
        color: #038246; 
    }
    .card-subtitle {
        font-weight: bold;
        font-size: 0.9rem;
        margin-bottom: 5px;
        color: #999;
    }
    .news-meta {
        color: #666;
        font-size: 0.8rem;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF; height:80px">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/canaverde-removebg-preview.png" width="80px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pturistico.php">Pontos Turísticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendario.php">Calendário Cananeense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/sobrenos.php">Sobre nós</a>
                </li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="postagens.php"> Postagens</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="img">
            <a class="logo" href="#"><img src="../img/user (1).png" alt="" width="30px"></a>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a href="/php/logout.php" style="text-decoration: none; color: inherit;"><caption>Logout</caption></a>
            <?php else: ?>
                <a href="/paginas/login.php" style="text-decoration: none; color: inherit;"><caption>Faça login</caption></a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <?php
    
    include('../php/conexao.php'); 

 
    $sql = "SELECT * FROM noticias ORDER BY data_publicacao DESC";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo '<div class="row card-news">';
            echo '  <div class="col-md-4">';
            echo '      <img src="' . $row["imagem"] . '" class="img-fluid card-img-left" alt="Imagem da notícia">';
            echo '  </div>';
            echo '  <div class="col-md-8">';
            echo '      <div class="card-body">';
            echo '          <h6 class="card-subtitle mb-2">' . $row["categoria"] . '</h6>';
            echo '          <h5 class="card-title">' . $row["titulo"] . '</h5>';
            echo '          <p class="card-text">' . substr($row["conteudo"], 0, 200) . '...</p>';
            echo '          <p class="news-meta">Publicado em: ' . date('d/m/Y H:i', strtotime($row["data_publicacao"])) . '</p>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';
        }
    } else {
        echo "<p>Nenhuma notícia encontrada.</p>";
    }

    // Fecha a conexão
    $conn->close();
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzO5KkM9Im1Go5l0D7xXY1pHpPn4l9U/M2cbP7pJ4u5T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-HoA5brVtY1CpIK6c5AuC3d8T6mKWr1AW1jE4mPJw8c6D5ZaHjCZb6Er8Z0vx1N4T" crossorigin="anonymous"></script>
</body>
</html>
