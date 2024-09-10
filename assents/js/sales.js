// script.js

function updateSalesData() {
    fetch('get_sale.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('total-sales').innerText = `${data.total_sales}`;
            document.getElementById('total-vendas').innerText = `${data.total_vendas} Vendas`;
        })
        .catch(error => console.error('Erro ao buscar os dados de vendas:', error));
}

// Atualiza os dados a cada 5 segundos
setInterval(updateSalesData, 5000);


// Atualiza os dados na inicialização
updateSalesData();

console.log(updateSalesData);
