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
    <h2>Cadastro de entrega</h2>
  </div>
  <div class="card-body">
    <form method="post" action="<?=$base;?>/cadastrodeentrega_action.php">

      <label for="data_cadastro">data cadastro:</label>
      <input type="text" id="data_cadastro" name="data_cadastro" required>

      <label for="filial">filial:</label>
      <input type="text" id="filial" name="filial" required>

      <label for="pdv">pdv:</label>
      <input type="text" id="pdv" name="pdv" required>

      <label for="endereco">endereço:</label>
      <input type="text" id="endereco" name="endereco" required>

      <label for="bairro">bairro:</label>
      <input type="text" id="pdv" name="bairro" required>

      <label for="municipio">municipio:</label>
      <input type="text" id="municipio" name="municipio" required>

      <label for="cliente">cliente:</label>
      <input type="text" id="cliente" name="cliente" required>

      <label for="frete">frete:</label>
      <input type="text" id="frete" name="frete" value="R$:" required>

      <label for="responsavel">responsavel:</label>
      <input type="text" id="pdv" name="responsavel" required value="<?=$userInfo->name;?>" readonly>

       <label for="data_entrega">data entrega:</label>
      <input type="text" id="data_entrega" name="data_entrega" required>

      </div>
  <div class="card-footer">
    <input type="submit" name="" value="cadastrar entrega">
  </div>

      
    </form>
  
</div>
<script src="https://unpkg.com/imask"></script>
    <script >
        IMask(
            document.getElementById("data_cadastro"),
            {mask: '00/00/0000'}
            );


         IMask(
            document.getElementById("data_entrega"),
            {mask: '00/00/0000'}
            );
    </script>

<?php
	require_once 'partials/footer.php';

?>