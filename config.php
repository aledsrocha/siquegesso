<?php 

    session_start();
    $base = 'http://localhost/siquegesso';

    $db_name = 'siquegesso';
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';

    try {
        $pdo = new PDO("mysql:dbname=$db_name;host=$db_host;", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
         die("Could not connect to the database $dbname :" . $e->getMessage());

        
    }

   
 ?>