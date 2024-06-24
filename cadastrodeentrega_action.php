<?php 
	require_once 'config.php';
	require_once 'models/Entregas.php';
	require_once 'dao/EntregaDaoMysql.php';


	$data_cadastro = filter_input(INPUT_POST, 'data_cadastro');
	$filial = filter_input(INPUT_POST, 'filial');
	$pdv = filter_input(INPUT_POST, 'pdv');
	$endereco = filter_input(INPUT_POST, 'endereco');
	$bairro = filter_input(INPUT_POST, 'bairro');
	$municipio = filter_input(INPUT_POST, 'municipio');
	$cliente = filter_input(INPUT_POST, 'cliente');
	$frete = filter_input(INPUT_POST, 'frete');
	$responsavel = filter_input(INPUT_POST, 'responsavel');
	$data_entrega = filter_input(INPUT_POST, 'data_entrega');


	if ($data_cadastro && $filial) {
		


		
		$entregaDao = new EntregaDaoMysql($pdo);
		$entrega = new Entrega();


//====================================data cadastro========================================
		$data_cadastro = explode('/', $data_cadastro);
		if (count($data_cadastro) != 3) {
			$_SESSION['flash'] = 'Data de entrega invalida';
			header("Location:" .$base . "/cadastrodeentrega.php");
			exit;

		
	}


		$data_cadastro = $data_cadastro[2]. '-'. $data_cadastro[1]. '-'. $data_cadastro[0];

		if (strtotime($data_cadastro) === false) {
			$_SESSION['flash'] = 'Data de cadastro Invalida';
			header("Location:" .$base . "/cadastrodeentrega.php");
			exit;
		}


//====================================data cadastro========================================


//====================================data entrega========================================

			$data_entrega = explode('/', $data_entrega);
		if (count($data_entrega) != 3) {
			$_SESSION['flash'] = 'Data de entrega invalida';
			header("Location:" .$base . "/cadastrodeentrega.php");
			exit;

		
	}


		$data_entrega = $data_entrega[2]. '-'. $data_entrega[1]. '-'. $data_entrega[0];

		if (strtotime($data_entrega) === false) {
			$_SESSION['flash'] = 'Data de entrega Invalida';
			header("Location:" .$base . "/cadastrodeentrega.php");
			exit;
		}



		$entrega->data_cadastro = $data_cadastro;
		$entrega->filial = $filial;
		$entrega->pdv = $pdv;
		$entrega->endereco = $endereco;
		$entrega->bairro = $bairro;
		$entrega->municipio = $municipio;
		$entrega->cliente = $cliente;
		$entrega->frete = $frete;
		$entrega->responsavel = $responsavel;
		$entrega->data_entrega = $data_entrega;

		$entregaDao->insert($entrega);

	}

	header("Location: " . $base . "/cadastrodeentrega.php");
			exit;
 ?>