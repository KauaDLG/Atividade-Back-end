<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

<h2>Formulário de Cadastro</h2>

<form method="post">

    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone"><br><br>

    <label>Data de nascimento:</label><br>
    <input type="date" name="data"><br><br>

    <label>Cidade:</label><br>
    <input type="text" name="cidade"><br><br>

    <label>Estado:</label><br>
    <input type="text" name="estado"><br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="Masculino"> Masculino
    <input type="radio" name="sexo" value="Feminino"> Feminino
    <br><br>

    <label>Curso:</label><br>
    <select name="curso">
        <option value="Engenharia de Software">Engenharia de Software</option>
        <option value="Ciencia da computaçao">Ciencia da computaçao</option>
        <option value="ADS">ADS</option>
    </select>
    <br><br>

    <label>Observações:</label><br>
    <input type="text" name="observacoes"><br><br>

    <input type="submit" value="Cadastrar">

</form>


<?php

if ($_POST) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data = $_POST["data"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $curso = $_POST["curso"];
    $observacoes = $_POST["observacoes"];


    echo "<h2>Cartão de Cadastro</h2>";

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Data de nascimento: " . $data . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Curso: " . $curso . "<br>";
    echo "Observações: " . $observacoes;

}

?>

</body>
</html>
