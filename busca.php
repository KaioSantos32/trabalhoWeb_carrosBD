<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap.css">
    <link rel="stylesheet" href="static/app.css">
    <title>Encontra Carro</title>
</head>
<body>
<?php
session_start();
include_once('conexao.php');

$placa = $_POST["placa"];

$pesquisa = "SELECT * FROM carros_cadastro where placa='$placa'";

$resultado = mysqli_query($connection, $pesquisa);

echo "<div>";

if(!isset($_POST["placa"]) or empty($_POST["placa"])){
    echo "<h1>Dados Incorretos ou não existentes, tente novamente</h1>";
    echo "<form action='index.php'>";
    echo '<p><button class="btn btn-primary" href="index.php">Voltar</button></p>';
    echo "</form>";
    exit;
}
if (!$resultado){
    die("A Placa estava errada".@mysqli_error($connection));
}
else{

    $dados = mysqli_fetch_array($resultado);
    echo "<div class='tabela_carro_encontrado'>";
    echo '<h1>Carro Encontrado</h1>';

    echo "<table class='table table-striped table-responsive table-bordered'>";
    echo "<thead class='thead-default''>";
        echo '<tr>';
            echo '<th>Placa</th>';
            echo '<th>Marca</th>';
            echo '<th>Modelo</th>';
            echo'<th>Cor</th>';
            echo'<th>Tipo</th>';
        echo'</tr>';
    echo '</thead>';

    echo'<tbody>';
    echo "<td>Placa: ".$dados['placa']."<br><br></td>";
    echo "<td>Marca: ".$dados['marca']."<br><br></td>";
    echo "<td>Modelo: ".$dados['modelo']."<br><br></td>";
    echo "<td>Cor: ".$dados['cor']."<br><br></td>";
    echo "<td>Tipo: ".$dados['tipo']."<br><br></td>";
    echo '<tbody>';
    echo '</table>';
    echo "<form action='index.php'>";
    echo '<p><button class="btn btn-primary" href="index.php">Voltar</button></p>';
    echo "</form>";

    echo "</div>";
}
echo "</div>";
mysqli_close($connection);

?>



</body>
</html>