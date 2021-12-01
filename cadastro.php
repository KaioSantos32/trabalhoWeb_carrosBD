<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/bootstrap.css">
  <link rel="stylesheet" href="static/app.css">
</head>
<body>
    
<?php

    session_start();
    include_once("conexao.php");

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "carrosbd";

    $connection = mysqli_connect($servidor, $usuario, $senha, $banco);

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    $tipo = $_POST['tipo'];

    $result_cadastro = "INSERT INTO carros_cadastro(marca,modelo,placa, cor,tipo) values('$marca', '$modelo', '$placa','$cor','$tipo')";
    
    $resultado_operacao = mysqli_query($connection, $result_cadastro);

    if ( mysqli_insert_id($connection)) {
        echo "Não foi possivel realizar o cadastro";
        echo "<br>";
        echo '<a class="btn btn-primary" href="index.php">Voltar</a>';
        echo "<br>";
        echo '<a class="btn btn-primary" href="templates/cadastro.html">Cadastrar</a>';
    }
    else{
        echo "Cadastro realizado com sucesso";
        echo "<br>";
        echo '<a class="btn btn-primary" href="index.php">Voltar</a>';
        echo "<br>";
        echo '<a class="btn btn-primary" href="templates/cadastro.html">Cadastrar</a>';



    }


?>

</body>
</html>