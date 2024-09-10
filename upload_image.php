<?php
// adicionar.php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    // Verificar se foi enviado um arquivo
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = $_FILES['imagem'];
        $nome_imagem = time() . '_' . basename($imagem['name']);
        $caminho_destino = 'uploads/' . $nome_imagem;

        // Verificar o tipo de arquivo
        $extensao = pathinfo($caminho_destino, PATHINFO_EXTENSION);
        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($extensao, $extensoes_permitidas)) {
            if (move_uploaded_file($imagem['tmp_name'], $caminho_destino)) {
                // Inserir no banco de dados
                $stmt = $pdo->prepare("INSERT INTO produtos (nome_produto, descricao, preco, imagem) VALUES (?, ?, ?, ?)");
                $stmt->execute([$nome_produto, $descricao, $preco, $caminho_destino]);

                echo "Produto adicionado com sucesso!";
            } else {
                echo "Erro ao fazer upload da imagem.";
            }
        } else {
            echo "Tipo de arquivo não permitido. Apenas JPG, JPEG, PNG e GIF são aceitos.";
        }
    } else {
        echo "Por favor, selecione uma imagem.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Novo Produto</h1>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <label for="nome_produto">Nome do Produto:</label><br>
        <input type="text" id="nome_produto" name="nome_produto" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="preco">Preço:</label><br>
        <input type="text" id="preco" name="preco" required><br><br>

        <label for="imagem">Imagem do Produto:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>

        <button type="submit">Adicionar Produto</button>
    </form>
    <br>
    <a href="produtos.php">Voltar ao Catálogo</a>
</body>
</html>
