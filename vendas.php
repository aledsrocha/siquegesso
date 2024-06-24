<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));



  require_once 'partials/header.php';

  $lista = [];
  $sql = $pdo->query("SELECT * FROM vendasprodutos");
  if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  }

?>
  

<div class="table_entrega">
  <div>
    <h2>Controle de vendas</h2>
  </div>
  <table class="my_table">
    <thead>
  <tr>
    <th>Nome do Produto</th>
    <th>Quantidade</th>
    <th>Valor</th>
    <th>observação</th>
    <th>cliente</th>
    <th>responsavel</th>
    <th>data da venda</th>
  </tr>
  </thead>

   <?php 

    foreach ($lista as $vendasItens): ?>
  <tr>
    <td><?=$vendasItens['nome_produto'];?></td>
    <td><?=$vendasItens['quantidade'];?></td>
    <td>R$: <?=$vendasItens['valor'];?></td>
    <td><?=$vendasItens['observacao'];?></td>
    <td><?=$vendasItens['cliente'];?></td>
    <td><?=$vendasItens['responsavel'];?></td>
    <td><?=$vendasItens['data_venda'];?></td>
    <td>
      <a href="<?=$base;?>/deletar_vendas.php?id=<?=$vendasItens['id'];?>"><span class="material-symbols-sharp">delete</span></a>
    </td>
  </tr>
  


<?php endforeach; ?>



  
</table>

<div class="novo_cadastro">
  <h2><a href="<?=$base;?>/cadastrodevendas.php">Nova Venda</a></h2>
  
</div>

  
</div>



<?php
  require_once 'partials/footer.php';

?>