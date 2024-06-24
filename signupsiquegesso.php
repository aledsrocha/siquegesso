<?php 
   require_once 'config.php';

 ?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=$base;?>/assents/css/login.css">
	<title>signup siquegesso</title>
</head>
<body>
	<div class="container">
  <div class="card">
    <img src="<?=$base;?>/assents/img/logo.jpg" width="200px">
    <form method="POST" action="<?=$base;?>/signupsiquegesso_action.php">
       <?php  if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = ''; ?>

                <?php endif; ?>
      <label>Email</label>
      <input type="text" id="username" name="email" placeholder="email" required>
      <label>senha</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <label>Nome</label>
      <input type="text" id="name" name="name" placeholder="nome completo" required>
      <label>data de nascimento</label>
      <input type="text" id="birthdate" name="birthdate" placeholder="00/00/0000" required>
      <label>tipo de usuario</label>
      <input type="text" id="type" name="type" placeholder="tipo de usuario" required>
      <button type="submit">cadastrar</button>
    </form>
  </div>
</div>
 <script src="https://unpkg.com/imask"></script>
    <script >
        IMask(
            document.getElementById("birthdate"),
            {mask: '00/00/0000'}
            );
    </script>
	
</body>


</html>