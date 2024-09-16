<?php 
  // Consulta para obter as atualizações recentes
$stmt = $pdo->query('SELECT nome_produto, preco, imagem FROM produtos ORDER BY id DESC LIMIT 5');
$updates = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

 
      

      <!----------------
        start right main 
      ---------------------->
    <div class="right">

<div class="top">
   <button id="menu_bar">
     <span class="material-symbols-sharp">menu</span>
   </button>

   <div class="theme-toggler">
     <span class="material-symbols-sharp active">light_mode</span>
     <span class="material-symbols-sharp">dark_mode</span>
   </div>
    <div class="profile">
       <div class="info">
           
           <p><?=$firstName;?></p>
           <small class="text-muted"></small>
       </div>
       <div class="profile-photo">
         <img src="<?=$base;?>/media/avatars/<?=$userInfo->avatar;?>" alt=""/>
       </div>
    </div>
</div>



<div class="recent_updates">
    <h2>Recent Updates</h2>
    <div class="updates">
        <?php foreach ($updates as $update): ?>
            <div class="update">
                <div class="profile-photo">
                    <img src="<?php echo $update['imagem']; ?>" alt="Imagem de <?php echo htmlspecialchars($update['nome_produto']); ?>"/>
                </div>
                <div class="message">
                    <p><b><?php echo htmlspecialchars($update['nome_produto']); ?></b> foi atualizado. Novo preço: $<?php echo htmlspecialchars($update['preco']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


   <div class="sales-analytics">
     <h2>Sales Analytics</h2>

      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-sharp">shopping_cart</span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Onlion Orders</h3>
            <small class="text-muted">Last seen 2 Hours</small>
          </div>
          <h5 class="danger">-17%</h5>
          <h3>3849</h3>
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-sharp">shopping_cart</span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Onlion Orders</h3>
            <small class="text-muted">Last seen 2 Hours</small>
          </div>
          <h5 class="success">-17%</h5>
          <h3>3849</h3>
        </div>
      </div>
      <div class="item onlion">
        <div class="icon">
          <span class="material-symbols-sharp">shopping_cart</span>
        </div>
        <div class="right_text">
          <div class="info">
            <h3>Onlion Orders</h3>
            <small class="text-muted">Last seen 2 Hours</small>
          </div>
          <h5 class="danger">-17%</h5>
          <h3>3849</h3>
        </div>
      </div>
   
  

</div>

      <div class="item add_product">
            <div>
            <span class="material-symbols-sharp">add</span>
            </div>
     </div>
</div>


   </div>



   <script type="text/javascript" src="<?=$base;?>/assents/js/script.js"></script>
</body>
</html>