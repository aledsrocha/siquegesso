<?php  
  $stmt = $pdo->query('SELECT nome_produto, quantidade, responsavel FROM vendasprodutos ORDER BY data_venda DESC LIMIT 5');
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<main>
        <h1>Dashboard</h1>

        <div class="date">
            <input type="date">
        </div>

        <div class="insights">

            <!-- start sales -->
            <div class="sales">
                <span class="material-symbols-sharp">trending_up</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1 id="total-sales">$0</h1> <!-- Elemento atualizado pelo JavaScript -->
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p id="total-vendas">0 Vendas</p></div> <!-- Elemento atualizado pelo JavaScript -->
                    </div>
                </div>
                <small>Last 24 Hours</small>
            </div>
            <!-- end sales -->

            <!-- start expenses -->
            <div class="expenses">
                <span class="material-symbols-sharp">local_mall</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Expenses</h3>
                        <h1>$0</h1> <!-- Aqui você pode adicionar outra funcionalidade -->
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>80%</p></div>
                    </div>
                </div>
                <small>Last 24 Hours</small>
            </div>
            <!-- end expenses -->

            <!-- start income -->
            <div class="income">
                <span class="material-symbols-sharp">stacked_line_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Income</h3>
                        <h1>$0</h1> <!-- Aqui você pode adicionar outra funcionalidade -->
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>80%</p></div>
                    </div>
                </div>
                <small>Last 24 Hours</small>
            </div>
            <!-- end income -->

        </div>
        <!-- end insights -->

        <div class="recent_order">
    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Nome produto</th>
                <th>Quantidade</th>
                <th>Responsavel da venda</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo htmlspecialchars($order['nome_produto']); ?></td>
                    <td><?php echo htmlspecialchars($order['quantidade']); ?></td>
                    <td><?php echo htmlspecialchars($order['responsavel']); ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    ?<a href="<?=$base;?>/vendas.php">Show All</a>
</div>

    </main>

    <script type="text/javascript" src="<?=$base;?>/assents/js/sales.js"></script>