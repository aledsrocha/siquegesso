<?php 

	require_once 'models/Entregas.php';


	class EntregaDaoMysql implements EntregaDao{


		private $pdo;

		public function __construct(PDO $driver){
			$this->pdo = $driver;
		}


		public function insert(Entrega $e){
			$sql = $this->pdo->prepare("INSERT INTO controledeentregas
(data_cadastro, filial, pdv, endereco, bairro, municipio, cliente, frete, responsavel, data_entrega) 
				VALUES (:data_cadastro, :filial, :pdv, :endereco, :bairro, :municipio, :cliente, :frete, :responsavel, :data_entrega)");

			$sql->bindValue(':data_cadastro', $e->data_cadastro);
			$sql->bindValue(':filial', $e->filial);
			$sql->bindValue(':pdv', $e->pdv);
			$sql->bindValue(':endereco', $e->endereco);
			$sql->bindValue(':bairro', $e->bairro);
			$sql->bindValue(':municipio', $e->municipio);
			$sql->bindValue(':cliente', $e->cliente);
			$sql->bindValue(':frete', $e->frete);
			$sql->bindValue(':responsavel', $e->responsavel);
			$sql->bindValue(':data_entrega', $e->data_entrega);
			$sql->execute();
		}
	}

 ?>