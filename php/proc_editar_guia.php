<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
 .container{
   
    background-color: #FFFFFF;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;  
    flex-direction: column;
 }
 .titulo{
    padding-right: 550px;
 }
 .btn-custom {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fdde5b; 
    border-color: #fdde5b; 
    color: black; 
}
a.caption-login {
    text-decoration: none;
    color: inherit;
}


a.caption-login:hover {
    color: #fdde5b;
}



</style>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF; height:80px">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="../img/canatrip.png" width="70px"></a>
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
                    <a class="nav-link" href="#">Contrate um guia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/calendario.php">Calendário Cananeense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Sobre nós</a>
                </li>
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




    <div class="container">
        <div class="titulo">
        <h1>Editar</h1>
        </div>
  
    <form action="atualizar.php" method="get">
        <input value="<?php echo $_GET['id']?>" type="text" name="id" placeholder="Id a ser alterado" hidden>
        <input value="<?php echo $_GET['nome']?>" type="text" name="nome" placeholder="Nome">
        <input value="<?php echo $_GET['email']?>" type="text" name="email" placeholder="Email">
        <input value="<?php echo $_GET['senha']?>" type="text" name="senha" placeholder="Senha">
        <button type="submit" class="btn btn-custom">Salvar</button>

    </form>
    </div>
     
    
</body>
</html>