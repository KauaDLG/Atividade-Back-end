<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo do IMC</title>
</head>
<body>

    <h2>Calculadora de IMC</h2>

    <form method="post">
        <label>Peso (kg):</label><br>
        <input type="number" name="peso" step="0.1" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        echo "<h3>Seu IMC é: $imc";
    }
    ?>

</body>
</html>
