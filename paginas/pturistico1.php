<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praia do Pereirinha - Ilha Grande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            margin: 20px;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }
        .featured-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        img.featured {
            max-width: 100%;
            width: 50%; 
            height: auto;
            border-radius: 5px;
        }
        h1, h2 {
            color: #333;
        }
        .rating {
            color: gold;
        }
        .review {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .map {
            width: 100%;
            height: 300px;
            background-color: #ddd;
            margin: 20px 0;
        }
        .conteudo{
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(../img/praiapereirinhasemfundo.jpg);
            background-position: 30% 45%;
            background-size: cover;
        }
    </style>
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
                    <a class="nav-link" href="calendario.php">Calendário Cananeense</a>
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
    <div class="container">
        <div class="featured-container">
            <img src="../img/praiapereira.jpeg" alt="Praia do Pereirinha" class="featured">
        </div>
        <h1>Praia do Pereirinha</h1>
        <p><strong>Localização:</strong> Ilha Grande, Brasil</p>
        <p><strong>Avaliação Geral:</strong> <span class="rating">⭐⭐⭐⭐⭐ (4.8/5)</span></p>

        <h2>Descrição:</h2>
        <p>A Praia do Pereirinha é uma das praias mais belas de Cananéia, conhecida por suas águas cristalinas e tranquilas, ideais para snorkeling e natação. É um destino popular para quem busca relaxamento e contato com a natureza.</p>

        <h2>Avaliações:</h2>
        <div class="review">
            <p><strong>João Silva:</strong> <span class="rating">⭐⭐⭐⭐⭐</span></p>
            <p>"Uma das praias mais bonitas que já visitei! A água é incrivelmente clara e a vida marinha é abundante. Perfeito para snorkeling."</p>
        </div>
        <div class="review">
            <p><strong>Maria Oliveira:</strong> <span class="rating">⭐⭐⭐⭐</span></p>
            <p>"A praia é linda e muito tranquila, mas o acesso é um pouco difícil. Vale a pena pela beleza do lugar."</p>
        </div>
        <div class="review">
            <p><strong>Carlos Souza:</strong> <span class="rating">⭐⭐⭐⭐⭐</span></p>
            <p>"Lugar paradisíaco! Ideal para relaxar e apreciar a natureza. Recomendo a todos que visitam Ilha Grande."</p>
        </div>

        <h2>Informações Úteis:</h2>
        <p><strong>Horário de Funcionamento:</strong> Aberta todos os dias</p>
        <p><strong>Preço:</strong> Acesso gratuito</p>
        <p><strong>Como Chegar:</strong> Acesso por trilhas ou barco a partir de Abraão</p>
        <p><strong>Facilidades:</strong> Restaurantes próximos, aluguel de equipamentos para snorkeling</p>

        <h2>Fotos:</h2>
        <img src="link_para_foto1" alt="Praia do Pereirinha" style="width:100%; height:auto;">
        <img src="link_para_foto2" alt="Vista da Praia" style="width:100%; height:auto; margin-top:10px;">

        <h2>Dicas dos Visitantes:</h2>
        <p><strong>Melhor Horário:</strong> Visite pela manhã cedo para aproveitar a tranquilidade.</p>
        <p><strong>Dica de Transporte:</strong> Utilize um barco para um acesso mais fácil e rápido.</p>
        <p><strong>Segurança:</strong> Fique atento aos seus pertences, especialmente em áreas mais movimentadas.</p>

        <h2>Mapa:</h2>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4447.065783269934!2d-47.91541322374435!3d-25.063809618505307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94daf07d24a611cf%3A0xe495ead434fcef1b!2sPereirinha%20Beach!5e1!3m2!1sen!2sbr!4v1725662905972!5m2!1sen!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <h2>Comentários:</h2>
        <p>"A praia é incrível! Voltarei com certeza." - Ana Lima</p>
        <p>"Lugar perfeito para relaxar e apreciar a natureza." - Roberto Fernandes</p>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOgQx5rACzZZ3OYfRYkE4lUksdQRVvoxMfooAoISJEK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+pP8Q1hPY8sTknpVSbKSOBDPG0hOSeC7U2BtCszINgTPw7CMV5FmOeaN0oKm+T" crossorigin="anonymous"></script>
</body>
</html>
