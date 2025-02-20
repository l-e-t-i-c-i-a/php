<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Anual 2024</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Calendário Anual - 2024</h1>

    <?php
    $feriados = [
        '01-01' => 'Ano Novo',
        '12-02' => 'Carnaval',
        '13-02' => 'Carnaval',
        '29-03' => 'Sexta-feira Santa',
        '21-04' => 'Tiradentes',
        '01-05' => 'Dia do Trabalho',
        '30-05' => 'Corpus Christi',
        '07-09' => 'Independência do Brasil',
        '12-10' => 'Nossa Senhora Aparecida',
        '02-11' => 'Finados',
        '15-11' => 'Proclamação da República',
        '25-12' => 'Natal'
    ];

    $nomesDias = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];

    for ($mes = 1; $mes <= 12; $mes++) {
        echo "<h2>" . date("F", mktime(0, 0, 0, $mes, 1, 2024)) . "</h2>";
        echo "<table><tr>";

        // Cabeçalho com os dias da semana
        foreach ($nomesDias as $dia) {
            echo "<th>$dia</th>";
        }
        echo "</tr><tr>";

        // Espaço antes do primeiro dia do mês
        $primeiroDia = date('w', mktime(0, 0, 0, $mes, 1, 2024));
        for ($i = 0; $i < $primeiroDia; $i++) {
            echo "<td></td>";
        }

        // Dias do mês
        $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, 2024);
        for ($dia = 1; $dia <= $diasNoMes; $dia++) {
            $dataFormatada = sprintf("%02d-%02d", $dia, $mes);

            // Verifica se é feriado
            $classeFeriado = isset($feriados[$dataFormatada]) ? 'feriado' : '';

            echo "<td class='$classeFeriado'>$dia";
            if ($classeFeriado) {
                echo "<br><small>" . $feriados[$dataFormatada] . "</small>";
            }
            echo "</td>";

            // Quebra de linha no sábado
            if (date('w', mktime(0, 0, 0, $mes, $dia, 2024)) == 6) {
                echo "</tr><tr>";
            }
        }

        // Completa a última linha do mês
        $ultimoDiaSemana = date('w', mktime(0, 0, 0, $mes, $diasNoMes, 2024));
        for ($i = $ultimoDiaSemana; $i < 6; $i++) {
            echo "<td></td>";
        }

        echo "</tr></table><br>";
    }
    ?>

    <footer>Desenvolvido por: Letícia</footer>

</body>
</html>
