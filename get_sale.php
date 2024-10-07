<?php
// get_sales.php

require_once 'config.php';

$stmt = $pdo->prepare("SELECT SUM(valor) AS total_sales, COUNT(*) AS total_vendas FROM vendasprodutos WHERE data_venda >= DATE_SUB(NOW(), INTERVAL 1 DAY)");
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
 
echo json_encode($data);

