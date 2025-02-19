<?php
include 'conexao.php';

// Recuperando os itens cadastrados
$sql_itens = "SELECT * FROM itens";
$result_itens = $conn->query($sql_itens);

// Recuperando os convidados e fazendo cálculos de consumo
$sql_convidados = "SELECT * FROM convidados";
$result_convidados = $conn->query($sql_convidados);

$total_adultos = 0;
$total_criancas = 0;

while ($row = $result_convidados->fetch_assoc()) {
    $total_adultos += $row['adultos'];
    $total_criancas += $row['criancas'];
}

$consumo_carne = ($total_adultos * 300) + ($total_criancas * 150);
$consumo_bebida = ($total_adultos * 500) + ($total_criancas * 300);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Churrasco</title>
</head>
<body>
    <h1>CHURRASCO LETÍCIA LEITE</h1>

    <img src="imagens/churrasco1.jpg" alt="Churrasco na grelha" width="300">
    <img src="imagens/churrasco2.jpg" alt="Churrasco" width="300">

    
    <h2>Lista de Itens</h2>
    <ul>
        <?php while ($item = $result_itens->fetch_assoc()) { ?>
            <li><?php echo $item['quantidade'] . "x " . $item['nome']; ?></li>
        <?php } ?>
    </ul>

    <h2>Lista de Convidados</h2>
    <p>Total de adultos: <?php echo $total_adultos; ?></p>
    <p>Total de crianças: <?php echo $total_criancas; ?></p>

    <h2>Consumo Estimado</h2>
    <p>Carne necessária: <?php echo $consumo_carne; ?>g</p>
    <p>Bebida necessária: <?php echo $consumo_bebida; ?>ml</p>

    <a href="index.php">Voltar</a>
</body>
</html>
