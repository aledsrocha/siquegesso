



<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));


  $query = $pdo->query("SELECT * FROM produtos");
$produtos = $query->fetchAll(PDO::FETCH_ASSOC);

  require_once 'partials/header.php';



?>

<style type="text/css">
  /* styles.css */

body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f4f4f4;
}

h1 {
    text-align: center;
}

.catalogo {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.produto {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    text-align: center;
    width: 200px;
    border-radius: 8px;
}

.produto img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.produto h2 {
    margin: 10px 0;
    font-size: 24px;
}

.produto p {
    font-size: 18px;
    margin: 10px 0;
}

  
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS opcional -->
</head>
<body>
    
    <div class="catalogo">
      <h1>Catálogo de Produtos</h1><br>
    
        <?php foreach ($produtos as $produto): ?>
            <div class="produto">
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome_produto']; ?>" style="max-width: 100%; height: auto;">
                <h2><?php echo $produto['nome_produto']; ?></h2>
                <p><?php echo $produto['descricao']; ?></p>
                <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
  </body>

<?php
	require_once 'partials/footer.php';

?>