<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanaTrip</title>
    <link rel="shortcut icon" href="../img/canaverde-removebg-preview.png" type="image/x-icon"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.login-1 {
  width: 450px; 
  margin: 0 auto;
  padding: 40px;
  border: 1px solid #c1c1c1;
  border-radius: 30px;
  background-color: hsl(0, 0%, 100%);
  font-family: Inter;
  margin-top: 1vh;
  box-shadow: 0 4px 4px 0 black;
}

.title-1 {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-repeat: no-repeat;
  margin-top: 20vh;
}
.btn-custom {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #00af4e; 
    border-color: #00af4e; 
    color: black; /* Cor do texto */
}

.conteudo-mar{
    height:610px;
    background-image: url(../img/fundologin.png);
    background-position: 50% 65%;
    background-size: cover;
    
}


  

</style>

<body>

<div class="nav-1">
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
                        <a class="nav-link" href="#">Pontos Turísticos</a>
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
                <a href="/paginas/login.php" style="text-decoration: none; color: inherit;"><caption>Faça login</caption></a>
            </div>
        </div>
    </nav>
</div>

<main>
<div class="title-1"><h1><strong>Página de login</strong></h1></div>

<div class="conteudo-mar">
<div class="conteudo-pai">
<div class="login-1">
    <form action="../php/proc_login_usuario.php" method="post">
        <div class="mb-2">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" aria-describedby="email" name="email" required>
        </div>
        <div class="mb-2">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar-se de mim</label>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-custom" value="Enviar">Logar</button>
            <a href="cadastro.php" class="btn btn-custom">Cadastrar-se</a>
        </div>
    </form>
</div>
</div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    