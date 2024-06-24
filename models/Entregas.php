<?php 
	
	class Entrega{


		public $id;
		public $data_cadastro;
		public $filial;
		public $pdv;
		public $endereco;
		public $bairro;
		public $municipio;
		public $cliente;
		public $frete;
		public $responsavel;
		public $data_entrega;


	}

	interface EntregaDao{
		public function insert(Entrega $e);
		
	}


 ?>