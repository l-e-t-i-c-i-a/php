<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];

    $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$imagem')";
    if ($conn->query($sql)) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<form method="post">
    Nome: <input type="text" name="nome" required><br>
    Descrição: <textarea name="descricao" required></textarea><br>
    Preço: <input type="number" step="0.01" name="preco" required><br>
    URL da Imagem: <input type="text" name="imagem" required><br>
    <button type="submit">Cadastrar</button>
</form>
