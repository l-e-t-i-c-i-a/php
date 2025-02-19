<?php
include 'conexao.php';

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO itens (nome, quantidade) VALUES ('$nome', '$quantidade')";
if ($conn->query($sql) === TRUE) {
    echo "Item adicionado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>
<a href="index.php">Voltar</a>
