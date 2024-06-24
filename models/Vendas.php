<?php

	class Vendas{


		public $id;
		public $nome_produto;
		public $quantidade;
		public $valor;
		public $observacao;
		public $cliente;
		public $responsavel;
		public $data_venda;


		
	}

	interface vendasDao{
			public function insert(Vendas $v);
		}