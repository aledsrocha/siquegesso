<?php 
   require_once 'config.php';

 ?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=$base;?>/assents/css/login.css">
	<title>Login siquegesso</title>
</head>
<body>
	<div class="container">
  <div class="card">
    <img src="<?=$base;?>/assents/img/logo.jpg" width="200px">

    <form method="POST" action="<?=$base;?>/login_action.php">
       <?php  if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = ''; ?>

            <?php endif; ?>
      
      <input type="text" id="username" name="email" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="hidden" name="type">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
	
</body>
</html>