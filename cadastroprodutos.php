<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));

  require_once 'partials/header.php';

?>
<div>
  <form method="POST" action="<?=$base;?>/cadastroprodutos_action.php">
    <input type="text" name="produto_name">
    <input type="text" name="quantidade_estoque">
    <input type="file" name="produto_image">
    <input type="submit" name="submit" value="cadastrar produto">
    
  </form>
 
</div>
<?php
	require_once 'partials/footer.php'; 

?>