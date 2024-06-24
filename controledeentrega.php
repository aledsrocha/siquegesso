<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));



  require_once 'partials/header.php';

  $lista = [];
  $sql = $pdo->query("SELECT * FROM controledeentregas");
  if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  }

?>
  

<div class="table_entrega">
  <div>
    <h2>Controle de entregas</h2>
  </div>
  <table class="my_table">
    <thead>
  <tr>
    <th>data cadastro</th>
    <th>filial</th>
    <th>pdv</th>
    <th>endereço</th>
    <th>bairro</th>
    <th>municipio</th>
    <th>cliente</th>
    <th>frete</th>
    <th>responsavel</th>
    <th>data da entrega</th>
  </tr>
  </thead>



  <?php 

    foreach ($lista as $cadastroItem): ?>
  <tr>
    <td><?=$cadastroItem['data_cadastro'];?></td>
    <td><?=$cadastroItem['filial'];?></td>
    <td><?=$cadastroItem['pdv'];?></td>
    <td><?=$cadastroItem['endereco'];?></td>
    <td><?=$cadastroItem['bairro'];?></td>
    <td><?=$cadastroItem['municipio'];?></td>
    <td><?=$cadastroItem['cliente'];?></td>
    <td>R$: <?=$cadastroItem['frete'];?></td>
    <td><?=$cadastroItem['responsavel'];?></td>
    <td><?=$cadastroItem['data_entrega'];?></td>
    <td>
      <a href="<?=$base;?>/deletar.php?id=<?=$cadastroItem['id'];?>"><span class="material-symbols-sharp">delete</span></a>
    </td>
  </tr>
  


<?php endforeach; ?>
</table>

<div class="novo_cadastro">
  <h2><a href="<?=$base;?>/cadastrodeentrega.php">registro de entrega</a></h2>
  
</div>

  
</div>



<?php
  require_once 'partials/footer.php';

?>