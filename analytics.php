<?php

require_once 'config.php';
 require_once 'models/Auth.php';
 require_once 'dao/VendasDaoMysql.php';
 require_once 'models/Vendas.php';


  $auth = new Auth($pdo, $base);

  $userInfo = $auth->checktoken();

  $firstName = current(explode(' ', $userInfo->name));

    $vendasDao = new VendasDaoMysql($pdo);
	$Vendaa = new Vendas();




  require_once 'partials/header.php';

?>

<?php
$query = $pdo->query("SELECT nome_produto, quantidade, valor, responsavel FROM vendasprodutos"); // Replace 'your_table_name' with your actual table name
$data = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
?>

<?php
$jsonData = json_encode($data);
?>

<head>
    <title>Google Chart with Product Data</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'nome_produto');
            data.addColumn('number', 'quantidade');
            data.addColumn('number', 'valor');
            

            var jsonData = <?php echo $jsonData; ?>;
            jsonData.forEach(function(row) {
                data.addRow([row.nome_produto, parseInt(row.quantidade), parseFloat(row.valor)]);
            });

            var options = {
                title: 'relatorio de vendas',
                hAxis: {title: 'nome do produto'},
                vAxis: {title: 'quantidades'},
                width: 1000,
                height: 600,
                seriesType: 'bars',
                series: {5: {type: 'line'}}, // Line for the value
                isStacked: false,
                legend: { position: 'top', maxLines: 3 }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div"></div>
</body>
