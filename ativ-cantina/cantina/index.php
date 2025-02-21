<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantina Italiana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h1 class="text-center mt-3">Bem-vindo à Cantina Italiana</h1>
    
    <h2>Produtos</h2>
    <div class="row">
        <?php
        $result = $conn->query("SELECT * FROM produtos");
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= $row['imagem'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['nome'] ?></h5>
                    <p class="card-text"><?= $row['descricao'] ?></p>
                    <p><strong>Preço: R$<?= $row['preco'] ?></strong></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <h2 class="mt-4">Serviços</h2>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM servicos");
        while ($row = $result->fetch_assoc()):
        ?>
        <li><strong><?= $row['nome'] ?></strong>: <?= $row['descricao'] ?></li>
        <?php endwhile; ?>
    </ul>

    <footer class="mt-5">
        <p class="text-center">Desenvolvido por Letícia Leite</p>
    </footer>
</body>
</html>
