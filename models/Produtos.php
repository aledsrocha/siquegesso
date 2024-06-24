<?php

	class Produtos{


		public $id;
		public $produto_name;
		public $quantidade_estoque;
		public $produto_image;
		


		
	}

	interface ProdutosDao{
			public function insert(Produtos $p);
		}