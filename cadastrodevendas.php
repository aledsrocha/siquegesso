<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));

  require_once 'partials/header.php';

?>
<div class="card">
  <div class="card-header">
    <h2>Cadastro de vendas</h2>
  </div>
  <div class="card-body">
    <form method="post" action="<?=$base;?>/cadastrodevenda_action.php">

      <label for="nome_produto">Produto:</label>
      <input type="text" id="produto" name="nome_produto" required>

      <label for="quantidade">quantidade:</label>
      <input type="text" id="quantidade" name="quantidade" required>

      <label for="valor">valor:</label>
      <input type="text" id="valor" name="valor" required>

      <label for="observacao">observacao:</label>
      <input type="text" id="observacao" name="observacao">

      
      <label for="cliente">cliente:</label>
      <input type="text" id="cliente" name="cliente" required>

      <label for="responsavel">responsavel:</label>
      <input type="text" id="pdv" name="responsavel" required value="<?=$userInfo->name;?>" readonly>

       <label for="data_venda">data da venda:</label>
      <input type="text" id="data_venda" name="data_venda" required>

      </div>
  <div class="card-footer">
    <input type="submit" name="" value="cadastrar venda">
  </div>

      
    </form>
  
</div>
<script src="https://unpkg.com/imask"></script>
    <script >
        IMask(
            document.getElementById("data_venda"),
            {mask: '00/00/0000'}
            );


    </script>

<?php
	require_once 'partials/footer.php';

?>