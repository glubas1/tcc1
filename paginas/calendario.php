<?php
session_start();
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanaTrip</title>
    <link rel="shortcut icon" href="../img/canaverde-removebg-preview.png" type="image/x-icon"> 
    <link rel="stylesheet" href="../css/calendar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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

    <main>
        <div class="container-1">
            <div class="left">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">dezembro 2015</div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sáb</div>
                    </div>
                    <div class="days"></div>
                    <div class="goto-today">
                        <div class="goto">
                            <input type="text" placeholder="mm/aaaa" class="date-input" />
                            <button class="goto-btn">Ir</button>
                        </div>
                        <button class="today-btn">Hoje</button>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="today-date">
                    <div class="event-day">qua</div>
                    <div class="event-date">12 de dezembro de 2022</div>
                </div>
                <div class="events"></div>
                <div class="add-event-wrapper">
                    <div class="add-event-header">
                        <div class="title">Adicionar Evento</div>
                        <i class="fas fa-times close"></i>
                    </div>
                    <div class="add-event-body">
                        <div class="add-event-input">
                            <input type="text" placeholder="Nome do Evento" class="event-name" />
                        </div>
                        <div class="add-event-input">
                            <input type="text" placeholder="Hora de Início do Evento" class="event-time-from" />
                        </div>
                        <div class="add-event-input">
                            <input type="text" placeholder="Hora de Término do Evento" class="event-time-to" />
                        </div>
                    </div>
                    <div class="add-event-footer">
                        <button class="add-event-btn">Adicionar Evento</button>
                    </div>
                </div>
            </div>
            <button class="add-event">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </main>

    <script src="../js/script.js"></script>
</body>
</html>
