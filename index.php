<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap.css">
    <link rel="stylesheet" href="static/app.css">
    <link rel="stylesheet" href="static/index.css">
    <title>Listagem de Carros</title>
</head>
<body>
    <div id="page-header">
        <h1>Lista de Carros</h1>
    </div>


    <?php
        session_start();
        include_once("conexao.php");
        echo "<div class='index_form'>";
        echo "<form action='templates/cadastro.html'>";
        echo '<p><button class="btn btn-primary" >Cadastrar</button></p>';
        echo "</form>";
        echo "<form action='templates/busca.html'>";
        echo '<p><button class="btn btn-primary" >Buscar</button></p>';
        echo "</form>";
        echo "<form action='templates/deleta.html'>";
        echo '<p><button class="btn btn-primary" >Deletar</button></p>';
        echo "</form>";
        echo "</div>";
        mysqli_close($connection)


    ?>
</body>
</html>