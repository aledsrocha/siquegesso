<?php 

	class User{
		public $id;
		public $email;
		public $password;
		public $name;
		public $birthdate;
		public $token;
		public $type;
	}


	interface UserDao{
		public function findByToken($token);
		public function findByEmail($email);
		
	}
 ?>