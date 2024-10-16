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
</head>
<style>
    .card-img-top {
        height: 300px;
        object-fit: cover; 
    }
    .conteudo{
        width: 100%;
        background-image: url(../img/fundoponto.png);
        background-position: 40% 45%;
        background-size: cover;
        
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
                    <a class="nav-link" href="sobrenos.php">Sobre nós</a>
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

<div class="conteudo">
<div class="container">
    <h2 class="mb-4 pt-4">Pontos Turísticos</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/praia-do-pereirinha.jpg" class="card-img-top" alt="Ponto Turístico 1">
                <div class="card-body">
                    <h5 class="card-title">Praia Do Pereirinha</h5>
                    <p class="card-text">Praia com águas calmas e areia fina, ideal para relaxar.</p>
                    <a href="pturistico1.php" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/caption.jpg" class="card-img-top" alt="Ponto Turístico 2">
                <div class="card-body">
                    <h5 class="card-title">Cachoeira Rio Das Minas</h5>
                    <p class="card-text">Belíssima cachoeira em meio à natureza.</p>
                    <a href="pturistico2.php" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/tubas.jpg" class="card-img-top" alt="Ponto Turístico 3">
                <div class="card-body">
                    <h5 class="card-title">Museu Municipal de Cananéia</h5>
                    <p class="card-text">Museu que exibe a rica história e cultura de cananéia.</p>
                    <a href="#" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/igreja.jpg" class="card-img-top" alt="Ponto Turístico 3">
                <div class="card-body">
                    <h5 class="card-title">Igreja Matriz</h5>
                    <p class="card-text">Imponente igreja com arquitetura colonial e detalhes históricos.</p>
                    <a href="#" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/mirante.jpg" class="card-img-top" alt="Ponto Turístico 3">
                <div class="card-body">
                    <h5 class="card-title">Mirante Morro São João</h5>
                    <p class="card-text">Mirante com vista panorâmica deslumbrante da região.</p>
                    <a href="#" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>  
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="../img/pitu.jpg" class="card-img-top" alt="Ponto Turístico 3">
                <div class="card-body">
                    <h5 class="card-title">Cachoeira Do Pitú</h5>
                    <p class="card-text">Cachoeira rodeada por vegetação densa e águas cristalinas.</p>
                    <a href="#" class="btn btn-primary">Ver ponto</a>
                </div>
            </div>
        </div>    

     
        
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzO5KkM9Im1Go5l0D7xXY1pHpPn4l9U/M2cbP7pJ4u5T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-HoA5brVtY1CpIK6c5AuC3d8T6mKWr1AW1jE4mPJw8c6D5ZaHjCZb6Er8Z0vx1N4T" crossorigin="anonymous"></script>
</body>
</html>