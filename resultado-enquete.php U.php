<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include "conectar.php";
    $id = 0;
    $enquete = "";
    if (isset($_GET['id-enquete'])) {
        $id = $_GET['id-enquete'];
        $retorno = conectar("select *  from enquete where id = $id;");
        $linha = $retorno->fetch_assoc();
        $enquete = $linha['nome'];

    } 
?>
<div class="container">
    <h2><?php echo $enquete; ?> <a href="index.php" class="btn btn-secondary">voltar</a></h2>
    <table class="table table-striped">
        <tr>
            <th>respota</th>
            <th class="col-sm-2">quantidade</th>
</tr>
<?php
if ($id > 0){
    $retorno = conectar("select * from resposta where id_enquete = $id;");
    while ($linha = $retorno->fetch_assoc()){
        $quantidade = $linha['quantidade'];
        echo "<tr>
        <td>$resposta</td>
        <td>$quantidade</td>
        </tr>";

    }
}
?>
</table>
</div> 
</body>

</html> 
