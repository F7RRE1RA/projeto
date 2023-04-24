<!DOCTYPE html> 
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <title>lista de enquetes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>lista de enquetes <a href="criar-enquete.php"
            class= "btn btn secondary">criar nova criar-enquete</a><h2>
                <table class= "table table-striped">
                    <tr>
                        <?php
                        include "conectar.php";
                        $retorno = conectar("select * from enquete;");
                        while ($linha = $retorno->fetch_assoc()) {
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            echo "<tr>
                            <td>$nome</td>
                            <td class='text-center' ><a href= 'responder-enquete.php?id-enquete=$id'
                            class='btn btn-outline-primary btn-sm'>:]</a><td>
                            <td class='text-center'><a href='resultado-enquete.php?id-enquete=$id'
                            class='btn btn-outline-primary btn-sm'> ;)
                            </tr>";
                        }
                        ?>
                        </table>
                    </div>
                    </body>
                    </html>
                            