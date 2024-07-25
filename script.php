<?php
// Define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// Obtém a data e hora atuais
$currentDateTime = date('d/m/Y H:i:s');

// Obtém a hora atual
$currentHour = date('H');

// Função para gerar uma saudação baseada na hora do dia
function getGreeting($hour) {
    if ($hour >= 6 && $hour < 12) {
        return "Bom dia!";
    } elseif ($hour >= 12 && $hour < 18) {
        return "Boa tarde!";
    } elseif ($hour >= 18 && $hour < 24) {
        return "Boa noite!";
    } else {
        return "Boa madrugada!";
    }
}

// Chama a função para obter a saudação
$greeting = getGreeting($currentHour);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Saudação Personalizada</title>
</head>
<body>
    <h1><?php echo $greeting; ?></h1>
    <p>Data e Hora atuais: <?php echo $currentDateTime; ?></p>
</body>
</html>
