<?php 

include "conectar.php";
if (isset($_GET['id-enquete'])){
    include "form-responder-enquete.php";

}
if (isset($_POST['resposta'])) {
    $id = $_POST['resposta'];
    $sql = "update resposta set quantidade = quantidade + 1 where id = $id";
    conectar($sql);
    echo "<h2>Resposta computada <a href= 'index.php' class='btn btn-secondary' >Voltar</a></h2>";

}
?>
</div>
</body>
</html>