<?php 
	require_once 'config.php';
	require_once 'models/Produtos.php';
	require_once 'dao/ProdutosDaoMysql.php';


	$produto_name = filter_input(INPUT_POST, 'produto_name');
	$quantidade_estoque = filter_input(INPUT_POST, 'quantidade_estoque');
	


	if ($produto_name && $quantidade_estoque) {
		
		$produtos = new Produtos();
		$produtosDao = new ProdutosDaoMysql($pdo);

		$produtos->produto_name = $produto_name;
		$produtos->quantidade_estoque = $quantidade_estoque;


		//AVATAR
		//verificando se tem erro na imagem
		if (isset($_FILES['produto_image']) && !empty($_FILES['produto_image']['tmp_name'])) {
			$newAvatar = $_FILES['produto_image'];
			//colocando tipo de imagem aceitavel
			if (in_array($newAvatar['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
				//tamanho da imagem
				$avatarWidth = 200;
				$avatarHeight = 200;

				list($widthOrigi, $heightOrigi) = getimagesize($newAvatar['tmp_name']);

				$ratio = $widthOrigi / $heightOrigi;

				$newWidith = $avatarWidth;
				$newHeight = $newWidith / $ratio;

				//caso o tamanho nao fique certo
				if ($newHeight < $avatarHeight) {
					$newHeight = $avatarHeight;
					$newWidith = $newHeight * $ratio;
				}
				$x = $avatarWidth - $newWidith;
				$y = $avatarHeight - $newHeight;
				$x = $x < 0 ? $x/2 : $x;
				$y = $y < 0 ? $y/2 : $y;

				//pegando a imagem final
				$finalImage = imagecreatetruecolor($avatarWidth, $avatarHeight);


				switch ($newAvatar['type']) {
					case 'image/jpeg';
					case 'image/jpg';
					$image = imagecreatefromjpeg($newAvatar['tmp_name']);
					break;

					

					case 'image/png';
					$image = imagecreatefrompng($newAvatar['tmp_name']);					
					break;
				}
				//copiando a imagem dentro da outra
				imagecopyresampled(
					$finalImage, $image,
					$x, $y, 0,0,
					$newWidith, $newHeight, $widthOrigi, $heightOrigi
				);

				$avatarName = md5(time().rand(0,9999)). '.jpg';

				imagejpeg($finalImage, './media/avatars/'. $avatarName, 100);


				$produtos->produto_image = $avatarName;
			}
		}

		$produtosDao->insert($produtos);


		header("Location:".$base . "/cadastroprodutos.php");
	exit;
	}