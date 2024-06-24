<?php 

	require_once 'config.php';
	require_once 'models/Auth.php';


	$auth = new Auth($pdo, $base);

	$userInfo = $auth->checktoken();




	require_once 'partials/header.php';
	require_once 'partials/dashboard.php';
	require_once 'partials/footer.php';
	
	
 ?>

