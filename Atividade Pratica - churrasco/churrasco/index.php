<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHURRASCO Letícia</title>
</head>
<body>
    <h1>CHURRASCO Letícia Leite</h1>

    <!-- Formulário para adicionar itens -->
    <h2>Lista de Itens</h2>
    <form action="salvar_itens.php" method="post">
        <label for="nome">Nome do Item:</label>
        <input type="text" name="nome" required>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>
        <button type="submit">Adicionar</button>
    </form>

    <!-- Formulário para adicionar convidados -->
    <h2>Lista de Convidados</h2>
    <form action="salvar_convidados.php" method="post">
        <label for="nome">Nome do Convidado:</label>
        <input type="text" name="nome" required>
        <label for="adultos">Adultos:</label>
        <input type="number" name="adultos" required>
        <label for="criancas">Crianças:</label>
        <input type="number" name="criancas" required>
        <button type="submit">Adicionar</button>
    </form>

    <a href="relatorio.php">Ver Relatório</a>
</body>
</html>
