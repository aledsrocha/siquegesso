<?php 

	require_once 'models/Vendas.php';


	class VendasDaoMysql implements VendasDao{

		private $pdo;

		public function __construct(PDO $driver){
			$this->pdo = $driver;
		}


		public function insert(Vendas $v){


			$sql = $this->pdo->prepare("INSERT INTO vendasprodutos
				(nome_produto, quantidade, valor, observacao, cliente, responsavel, data_venda)
		VALUES (:nome_produto, :quantidade, :valor, :observacao, :cliente, :responsavel, :data_venda)
				");

			$sql->bindValue(':nome_produto', $v->nome_produto);
			$sql->bindValue(':quantidade', $v->quantidade);
			$sql->bindValue(':valor', $v->valor);
			$sql->bindValue(':observacao', $v->observacao);
			$sql->bindValue(':cliente', $v->cliente);
			$sql->bindValue(':responsavel', $v->responsavel);
			$sql->bindValue(':data_venda', $v->data_venda);
			$sql->execute();
		}

	}

 ?>