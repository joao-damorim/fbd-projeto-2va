<?php
	include_once "../conexao.php";
	$coddept = $_GET["CodDept"];
	
    $sql = "DELETE FROM departamento WHERE CodDept= $coddept";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento apagado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento não foi deletado com sucesso.\");
				</script>";
        $conectar->close();
    }	
?>

