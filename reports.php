<?php 

	require_once 'config.php';
	require_once 'models/Auth.php';


	$auth = new Auth($pdo, $base);

	$userInfo = $auth->checktoken();




	require_once 'partials/header.php';
	
	
	
 ?>

 <div class="report">
 	<div class="form_report">
 		<form action="<?=$base;?>/reports_action.php" method ="post">
 			<h2>Informe de relatos</h2>

 			<label>Nome do Usuário</label>
		<input type="text" id="responsavel" name="responsavel" required value="<?=$userInfo->name;?>" readonly>

		<label>Data do report</label>
		 <input class='col-4' type='date' name='dia_report' id='DSaida' value='<?php echo date("Y-m-d"); ?>'>

		 <label>qual report?</label>
		 <select name="selecionar" class="select_report">
			<option value="0">selecione a opção</option>
			<option value="falta de material">falta de material</option>
			<option value="atraso de entrega">atraso de entrega</option>
			<option value="problema estrutural"> problema estrutural</option>
			<option value="ausencia">funcionario ausente</option>
			<option value="outros"> outros</option>
			
			
		</select>
		<div>
        <textarea id="mensagem" name="mensagem" placeholder="A sua mensagem"></textarea>
    </div>
    	<input type="submit" name="" value="enviar">

	</form>
 		
 	</div>
 	


 </div>
 



 <?php 

 require_once 'partials/footer.php';
	
  ?>

