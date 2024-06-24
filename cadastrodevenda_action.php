<?php 
	require_once 'config.php';
	require_once 'models/Vendas.php';
	require_once 'dao/VendasDaoMysql.php';


	$nome_produto = filter_input(INPUT_POST, 'nome_produto');
	$quantidade = filter_input(INPUT_POST, 'quantidade');
	$valor = filter_input(INPUT_POST, 'valor');
	$observacao = filter_input(INPUT_POST, 'observacao');
	$cliente = filter_input(INPUT_POST, 'cliente');
	$responsavel = filter_input(INPUT_POST, 'responsavel');
	$data_venda = filter_input(INPUT_POST, 'data_venda');




	if ($nome_produto && $quantidade) {
		
		


		
		$vendasDao = new VendasDaoMysql($pdo);
		$vendas = new Vendas();



//====================================data venda========================================
		$data_venda = explode('/', $data_venda);
		if (count($data_venda) != 3) {
			$_SESSION['flash'] = 'Data de venda invalida';
			header("Location:" .$base . "/cadastrodevendas.php");
			exit;

		
	}
	


		$data_venda = $data_venda[2]. '-'. $data_venda[1]. '-'. $data_venda[0];

		if (strtotime($data_venda) === false) {
			$_SESSION['flash'] = 'Data de venda Invalida';
			header("Location:" .$base . "/cadastrodevendas.php");
			exit;
		}


//====================================data cadastro========================================




		$vendas->nome_produto = $nome_produto;
		$vendas->quantidade = $quantidade;
		$vendas->valor = $valor;
		$vendas->observacao = $observacao;
		$vendas->cliente = $cliente;
		$vendas->responsavel = $responsavel;
		$vendas->data_venda = $data_venda;


		$vendasDao->insert($vendas);

	}
	
	header("Location: " . $base . "/cadastrodevendas.php");
			exit;
 ?>