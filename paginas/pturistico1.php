<?php
include '../php/conexao.php';
$query = "SELECT nome, nota, comentario, data FROM avaliacoes ORDER BY data DESC";
$result = $conn->query($query); 


$avaliacoes = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $avaliacoes[] = $row;
    }
} else {
    // Nenhuma avaliação encontrada
}

?>

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
        .conteudo {
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
        <div class="featured-container">
            <img src="../img/praiapereira.jpeg" alt="Praia do Pereirinha" class="featured">
        </div>
        <h1>Praia do Pereirinha</h1>
        <p><strong>Localização:</strong> Ilha Grande, Brasil</p>
        <p><strong>Avaliação Geral:</strong> <span class="rating" id="media-avaliacao">⭐⭐⭐⭐⭐ (4.8/5)</span></p>
        <h2>Descrição:</h2>
        <p>A Praia do Pereirinha é uma das praias mais belas de Cananéia, conhecida por suas águas cristalinas e tranquilas, ideais para snorkeling e natação. É um destino popular para quem busca relaxamento e contato com a natureza.</p>
        <h2>Avaliações:</h2>
        <div id="avaliacoes">
            <?php if (count($avaliacoes) > 0): ?>
                <?php foreach ($avaliacoes as $avaliacao): ?>
                    <?php
                        $nome = htmlspecialchars($avaliacao['nome']);
                        $nota = $avaliacao['nota'];
                        $comentario = htmlspecialchars($avaliacao['comentario']);
                        $data = date('d/m/Y H:i', strtotime($avaliacao['data']));
                        $estrelas = str_repeat('⭐', $nota); 
                    ?>
                    <div class="review">
                        <p><strong><?php echo $nome; ?>:</strong>
                        <span class="rating"><?php echo $estrelas; ?> (<?php echo $nota; ?>)</span></p>
                        <p>"<?php echo $comentario; ?>"</p>
                        <p><small><?php echo $data; ?></small></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Não há avaliações ainda. Seja o primeiro a avaliar!</p>
            <?php endif; ?>
        </div>

        <h2>Adicionar Avaliação:</h2>
        <form id="form-avaliacao" action="../php/salvar_avaliacao.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="nota" class="form-label">Nota:</label>
                <select id="nota" class="form-select" name="nota" required>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentário:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
        </form>

        <h2>Informações Úteis:</h2>
        <p><strong>Horário de Funcionamento:</strong> Aberta todos os dias</p>
        <p><strong>Preço:</strong> Acesso gratuito</p>
        <p><strong>Como Chegar:</strong> Acesso por trilhas ou barco a partir de Abraão</p>
        <p><strong>Facilidades:</strong> Restaurantes próximos, aluguel de equipamentos para snorkeling</p>
        <h2>Mapa:</h2>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4447.065783269934!2d-47.91541322374435!3d-25.063809618505307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94daf07d24a611cf%3A0xe495ead434fcef1b!2sPereirinha%20Beach!5e1!3m2!1sen!2sbr!4v1725662905972!5m2!1sen!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOgQx5rACzZZ3OYfRYkE4lUksdQRVvoxMfooAoISJEK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+pP8Q1hPY8sTknpVSbKSOBDPG0hOSeC7U2BtCszINgTPw7CMV5FmOeaN0oKm+T" crossorigin="anonymous"></script>
</body>
</html>