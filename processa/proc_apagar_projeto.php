<?php
	include_once "../conexao.php";
	$Codigo = $_GET["Codigo"];
	
    $sql = "DELETE FROM projeto WHERE Codigo= $Codigo";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto apagado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto não foi deletado com sucesso.\");
				</script>";
        $conectar->close();
    }
?>

