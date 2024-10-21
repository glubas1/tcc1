<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanaTrip</title>
    <link rel="shortcut icon" href="/img/canaverde-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF; height:80px">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="/img/canaverde-removebg-preview.png" width="80px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/pturistico.php">Pontos Turísticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/calendario.php">Calendário Cananeense</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/sobrenos.php">Sobre nós</a>
                </li>

                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/postagens.php"> Postagens</a>
                </li>
                <?php endif; ?>


                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/adm.php"><img src="/img/admin_panel_settings_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="Coroa" width="20px"> Administrações</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="img">
            <a class="logo" href="#"><img src="../img/user (1).png" alt="" width="30px"></a>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <a href="/php/logout.php" class="caption-login"><caption>Logout</caption></a>
            <?php else: ?>
              <a href="/paginas/login.php" class="caption-login"><caption>Faça login</caption></a>
            <?php endif; ?>
        </div>
    </div>
</nav>




    <main>
    </div>
    <div class="content">
      
        <div class="texto">
          <div class="imagem-1">
            <img src="img/canaverde-removebg-preview.png" width="230px">
          </div>
          <h2>Conheça tudo sobre cananéia</h2>
          <p>Venha conhecer cananéia de um jeito diferente.</p>
            
        </div>



        <div class="mapa" id="map">
        
        </div>

        </div>            
        </div>
    
    </div>
    <div class="content-1">
   
    <div class="card" style="width: 18rem;">
  <img src="img/cananeia.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Avenida Beira Mar</h5>
    <p class="card-text">Principal avenida da cidade.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tubas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Museu Municipal</h5>
    <p class="card-text">Principal museu de cananéia.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/caption.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cachoeira Rio das Minas</h5>
    <p class="card-text">Uma das cachoeiras de cananeia.</p>
    <a href="/paginas/pturistico2.php" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/praia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Praia do Pereirinha</h5>
    <p class="card-text">Uma das praias de cananéia.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
  
  
</div>

        
    </div>
    
    <div class="conteudo-pai">
    <div class="conteudo-1">
    <div class="section">
        <img src="/img/forest.png" alt="Ícone de Natureza Exuberante">
        <h3>Descubra a Natureza</h3>
        <p>Explore as belezas naturais de Cananéia, com opções de trilhas, praias e biodiversidade única.</p>
    </div>

    <div class="section">
        <img src="/img/monument.png" alt="Ícone de Cultura Rica">
        <h3>Cultura e Tradição</h3>
        <p>Conheça a história e o patrimônio cultural de Cananéia, uma das cidades mais antigas do Brasil.</p>
    </div>

    <div class="section">
        <img src="/img/adventurer.png" alt="Ícone de Aventuras ao Ar Livre">
        <h3>Aventuras Imperdíveis</h3>
        <p>Descubra atividades emocionantes, como passeios de barco, pesca e ecoturismo em Cananéia.</p>
    </div>
  </div>
  </div>



    <div class="app-content">
      
<div class="app">
    <div class="container-app">
  <div class="left-content">
    <h2>Baixe o app Canatrip</h2>
    <p>Marque viagens por cananéia.</p>
    <div class="buttons">
    <a href="#" class="button">Baixe o app no google play</a><br>
     
      <a href="#" class="button">
        <br>
        </a>
    </div>
    <img src="/img/qrcode_gerado_pelo_bing.svg" alt="QR Code" class="qr-code">
  </div>
  <div class="right-content">
    <div class="phone">
      <img src="/img/phone2.jpg" alt="Phone"> 
    </div>
    <div class="curve"></div>
  </div>
  </div>
</div>

</div>
    </main>





    <footer>
      <div class="footer">
        <div class="creditos">
        <img src="/img/icons8-whatsapp-48 (1).png" alt="" width="37px">
        <h5>Entre em contato conosco</h5>
        </div>
        
       
       
        
          
            
         
       
        <div class="copy">
          <span>© Copyright Canatrip 2024 - Todos os direitos reservados</span>
        </div>
       
    
      </div>




    
    </footer>

    






<script type="text/javascript">
  var map;
  function initMap(){
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 0, lng: 0},
      zoom: 8
    });
  }


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGcK6BAfbHsXE1QC2quDb1BcA05xTjmxg&callback=initMap"
async defer></script>




      





<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>