<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));

  require_once 'partials/header.php';

?>





<form method="POST" action="<?=$base;?>/configuracoes_action.php" enctype="multipart/form-data"> 

   <?php  if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = ''; ?>

            <?php endif; ?>
  
<label>
      Novo avatar: <br>
      <input type="file" name="avatar" value=" <?=$userInfo->avatar?> ">
      <img src="<?=$base;?>/media/avatars/<?=$userInfo->avatar;?>">
    </label>


<label>
      nome completo: <br>
      <input type="text" name="name" value=" <?=$userInfo->name?> " >
    </label>

    <label>
      email: <br>
      <input type="email" name="email" value=" <?=$userInfo->email?> ">
    </label>

    <label>
      data de nascimento: <br>
      <input id="birthdate" type="text" name="birthdate" value=" <?=date('d/m/Y', strtotime($userInfo->birthdate));?> " >
    </label>


    <label>
      nova senha: <br>
      <input type="password" name="password">
    </label>

    <label>
      confirmar senha: <br>
      <input type="password" name="password_confirmation">
    </label>

    <button class="button">Salvar</button>



</form>

<script src="https://unpkg.com/imask"></script>
    <script >
        IMask(
            document.getElementById("birthdate"),
            {mask: '00/00/0000'}
            );
    </script>


<?php
  require_once 'partials/footer.php';

?>


