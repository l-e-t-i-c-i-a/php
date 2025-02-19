<?php
include 'conexao.php';

$nome = $_POST['nome'];
$adultos = $_POST['adultos'];
$criancas = $_POST['criancas'];

$sql = "INSERT INTO convidados (nome, adultos, criancas) VALUES ('$nome', '$adultos', '$criancas')";
if ($conn->query($sql) === TRUE) {
    echo "Convidado adicionado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>
<a href="index.php">Voltar</a>
