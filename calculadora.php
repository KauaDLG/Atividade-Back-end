<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="post">

    <label>Número 1:</label><br>
    <input type="number" name="num1" required><br><br>

    <label>Número 2:</label><br>
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="operacao" value="Somar">
    <input type="submit" name="operacao" value="Subtrair">
    <input type="submit" name="operacao" value="Multiplicar">
    <input type="submit" name="operacao" value="Dividir">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if ($operacao == "Somar") {
        $resultado = $num1 + $num2;
    }

    if ($operacao == "Subtrair") {
        $resultado = $num1 - $num2;
    }

    if ($operacao == "Multiplicar") {
        $resultado = $num1 * $num2;
    }

    if ($operacao == "Dividir") {
        $resultado = $num1 / $num2;
    }

    echo "<h3>Resultado: $resultado</h3>";
}

?>

</body>
</html>
