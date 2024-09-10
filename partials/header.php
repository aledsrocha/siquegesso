<?php
 require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siquegesso</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="<?=$base;?>/assents/css/style.css">
  <link rel="stylesheet" href="<?=$base;?>/assents/css/dinamic.css">


      
      
    </script>
</head>
<body>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <a href="<?=$base;?>"><img src="<?=$base;?>/assents/img/logo.jpg" alt=""></a>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="<?=$base?>">
              <span class="material-symbols-sharp">Home </span>
              <h3>Home</h3>
           </a>
           <a href="<?=$base?>/controledeentrega.php" class="active">
              <span class="material-symbols-sharp">garden_cart </span>
              <h3>controle de entrega</h3>
           </a>
           <a href="<?=$base;?>/analytics.php">
              <span class="material-symbols-sharp">insights </span>
              <h3>Analytics</h3>
           </a>
           <a href="<?=$base;?>/vendas.php">
              <span class="material-symbols-sharp">real_estate_agent </span>
              <h3>vendas</h3>
              
           </a>
           <a href="<?=$base;?>/produtos.php">
              <span class="material-symbols-sharp">receipt_long </span>
              <h3>Products</h3>
           </a>
           <a href="<?=$base;?>/reports.php">
              <span class="material-symbols-sharp">report_gmailerrorred </span>
              <h3>Reports</h3>
           </a>
           <a href="<?=$base;?>/configuracoes.php">
              <span class="material-symbols-sharp">settings </span>
              <h3>settings</h3>
           </a>
           <a href="<?=$base;?>/upload_image.php">
              <span class="material-symbols-sharp">add </span>
              <h3>Add Product</h3>
           </a>
           <a href="<?=$base;?>/logout.php">
              <span class="material-symbols-sharp">logout </span>
              <h3>logout</h3>
           </a>
             


          </div>

      </aside>
      <!-- --------------
        end asid
      -------------------- -->

      <!-- --------------
        start main part
      --------------- -->
