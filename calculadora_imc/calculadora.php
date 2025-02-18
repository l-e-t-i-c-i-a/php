<?php
// Função para calcular o IMC
function calcularIMC($peso, $altura) {
  return $peso / ($altura * $altura);
}

// Função para classificar o IMC
function classificarIMC($imc) {
  if ($imc < 18.5) {
    return "Abaixo do peso";
  } elseif ($imc < 25) {
    return "Peso normal";
  } elseif ($imc < 30) {
    return "Sobrepeso";
  } else {
    return "Obesidade";
  }
}

// Dados do aluno
$nome = "Letícia"; // Substitua pelo seu nome

// Verifica se os dados foram enviados pelo formulário
if (isset($_POST["peso"]) && isset($_POST["altura"])) {
  $peso = $_POST["peso"];
  $altura = $_POST["altura"];

  // Validação dos dados
  if (is_numeric($peso) && is_numeric($altura) && $peso > 0 && $altura > 0) {
    // Calcula o IMC
    $imc = calcularIMC($peso, $altura);

    // Classifica o IMC
    $classificacao = classificarIMC($imc);

    // Exibe os resultados
    echo "<h2>Resultados:</h2>";
    echo "<p>Nome: " . $nome . "</p>";
    echo "<p>Peso: " . $peso . " kg</p>";
    echo "<p>Altura: " . $altura . " m</p>";
    echo "<p>IMC: " . number_format($imc, 2) . "</p>";
    echo "<p>Classificação: " . $classificacao . "</p>";

    // Exibe o nome do aluno no final da aplicação
    echo "<div style='margin-top: 20px; text-align: center;'>"; // Adiciona margem e centraliza
    echo "<p>Calculadora desenvolvida por: " . $nome . "</p>";
    echo "</div>";
  } else {
    echo "<p>Por favor, insira valores numéricos válidos para peso e altura.</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculadora de Peso Corporal</title>
</head>
<body>
  <h1>Calculadora de Peso Corporal</h1>
  <form method="post">
    <label for="peso">Peso (kg):</label>
    <input type="number" name="peso" id="peso" required><br><br>

    <label for="altura">Altura (m):</label>
    <input type="number" name="altura" id="altura" step="0.01" required><br><br>

    <input type="submit" value="Calcular">
  </form>
</body>
</html>