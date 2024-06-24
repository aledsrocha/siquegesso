<?php 

	require_once 'models/Produtos.php';


	class ProdutosDaoMysql implements ProdutosDao{

		private $pdo;

		public function __construct(PDO $driver){
			$this->pdo = $driver;
		}


		public function insert(Produtos $p){


			$sql = $this->pdo->prepare("INSERT INTO vendasprodutos
				(produto_name, quantidade_estoque, produto_image)
		VALUES (:produto_name, :quantidade_estoque, :produto_image)
				");

			$sql->bindValue(':produto_name', $p->produto_name);
			$sql->bindValue(':quantidade_estoque', $p->quantidade_estoque);
			$sql->bindValue(':produto_image', $p->produto_image);
			$sql->execute();
		}

	}

 ?>