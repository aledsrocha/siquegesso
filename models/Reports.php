<?php 


	class Reports{



		public $id;
		public $responsavel;
		public $dia_report;
		public $selecionar;
		public $mensagem;
		
	}

	interface ReportsDao{
			public function insert(Reports $r);
		}


 ?>