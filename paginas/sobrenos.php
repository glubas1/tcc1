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
        background-image: url(../img/fundo.png);
        background-size: cover;
    }
    .conteudo{
        width: 100%;
    }
    .texto-container {
    width: 80%; 
    
    padding: 20px;
    background-color: white; 
    border-radius: 10px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
    }

   .texto-container p {
    font-size: 18px;
    color: #333; 
    }

    .social-buttons {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  gap: 15px; 
}

.social-buttons a {
  text-decoration: none;
  font-size: 24px; 
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white; 
  border-radius: 50%;
  transition: background-color 0.3s ease;
}

.btn-whatsapp {
  background-color: #25D366; 
}

.btn-whatsapp:hover {
  background-color: #1DA851;
}

.btn-facebook {
  background-color: #3b5998; 
}

.btn-facebook:hover {
  background-color: #2d4373;
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
                    <a class="nav-link" href="calendario.php">Calendário Cananeense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Sobre nós</a>
                </li>
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
<div class="container mt-5">
    <h2 class="mb-4">Sobre nós</h2>

    <div class="texto-container">
    <p>Somos a Wyskr Team, um grupo de alunos da ETEC dedicado a promover o turismo sustentável em Cananéia, uma cidade encantadora no litoral sul de São Paulo, reconhecida por suas praias desertas, manguezais e biodiversidade única. Nosso projeto, Canatrip, nasceu com o propósito de valorizar as riquezas naturais e culturais da região, ao mesmo tempo em que conectamos a cidade ao mundo por meio da tecnologia.
    </p>

    <div class="social-buttons">
    <!-- Botão de WhatsApp -->
    <a href="https://wa.me/SeuNumeroDeTelefone" target="_blank" class="btn-whatsapp">
      <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Botão de Facebook -->
    <a href="https://facebook.com/canatrip" target="_blank" class="btn-facebook">
      <i class="fab fa-facebook-f"></i>
    </a>
  </div>


    </div>
    

     
        
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzO5KkM9Im1Go5l0D7xXY1pHpPn4l9U/M2cbP7pJ4u5T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-HoA5brVtY1CpIK6c5AuC3d8T6mKWr1AW1jE4mPJw8c6D5ZaHjCZb6Er8Z0vx1N4T" crossorigin="anonymous"></script>
</body>
</html>