<?php 

	require_once 'config.php';
	require_once 'models/Reports.php';
	require_once 'dao/ReportDaoMysql.php';


	$responsavel = filter_input(INPUT_POST, 'responsavel');
	$dia_report = filter_input(INPUT_POST, 'dia_report');
	$selecionar = filter_input(INPUT_POST, 'selecionar');
	$mensagem = filter_input(INPUT_POST, 'mensagem');




	if ($responsavel && $dia_report) {

		

		$report = new Reports();
		$reportDao = new ReportDaoMysql($pdo);




		$report->responsavel = $responsavel;
		$report->dia_report = $dia_report;
		$report->selecionar = $selecionar;
		$report->mensagem = $mensagem;


		$reportDao->insert($report);


	}

	header("Location: " . $base . "/reports.php");
			exit;

 ?>