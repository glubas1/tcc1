<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Notícia</title>
</head>
<body>
    <h1>Adicionar Nova Notícia</h1>
    <form action="adicionar-noticia.php" method="POST" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria">
            <option value="Turismo">Turismo</option>
            <option value="Meio Ambiente">Meio Ambiente</option>
            <option value="Cultura">Cultura</option>
        </select><br><br>

        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" required></textarea><br><br>

        <label for="imagem">Upload de imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>

        <label for="data_publicacao">Data de Publicação:</label>
        <input type="datetime-local" id="data_publicacao" name="data_publicacao" required><br><br>

        <button type="submit">Publicar Notícia</button>
    </form>
</body>
</html>
