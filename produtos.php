<?php

require_once 'config.php';
  require_once 'models/Auth.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));

  require_once 'partials/header.php';

?>
<div>
  aaa
</div>
<?php
	require_once 'partials/footer.php';

?>