<?php
	require_once 'config.php';
	require_once 'models/Auth.php';
	
	
	

	$auth = new Auth($pdo, $base);
	require_once 'partials/header.php';
	?>
	<h1>teste de exibição</h1>
	<?php
	require_once 'partials/footer.php';


