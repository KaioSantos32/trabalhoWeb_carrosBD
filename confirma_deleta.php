<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/bootstrap.css">
    <link rel="stylesheet" href="static/app.css">

    <title>Deletar Carros</title>
</head>

<?php
    session_start();
    include_once("conexao.php");

    echo "<div>";
    $codigo = $_GET['placa'];
    $apaga = "delete from carros_cadastro where placa='$codigo'";
    $resultado = mysqli_query($connection, $apaga);

    if(!$resultado){
        die("Operação inválida".mysqli_error($connection));
        echo "<form action='index.php'>";
        echo '<p><button class="btn btn-primary" href="index.php">Voltar</button></p>';
        echo "</form>";
    }
    else{
        echo "Contato removido com sucesso";
        echo "<form action='index.php'>";
        echo '<p><button class="btn btn-primary" href="index.php">Voltar</button></p>';
        echo "</form>";

    }
    mysqli_close($connection);
?>