<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO servicos (nome, descricao) VALUES ('$nome', '$descricao')";
    if ($conn->query($sql)) {
        echo "Serviço cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<form method="post">
    Nome do Serviço: <input type="text" name="nome" required><br>
    Descrição: <textarea name="descricao" required></textarea><br>
    <button type="submit">Cadastrar</button>
</form>
