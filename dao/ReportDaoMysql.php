<?php 
	require_once 'models/Reports.php';


	class ReportDaoMysql implements ReportsDao{

		private $pdo;

		public function __construct(PDO $driver){
			$this->pdo = $driver;
		}


		public function insert(Reports $r){


			$sql = $this->pdo->prepare("INSERT INTO reports
				(responsavel, dia_report, selecionar, mensagem)
		VALUES (:responsavel, :dia_report, :selecionar, :mensagem)
				");

			$sql->bindValue(':responsavel', $r->responsavel);
			$sql->bindValue(':dia_report', $r->dia_report);
			$sql->bindValue(':selecionar', $r->selecionar);
			$sql->bindValue(':mensagem', $r->mensagem);
			$sql->execute();
		}
	}

 ?>