<?php
	include_once "../conexao.php";
	$CPF = $_GET["CPF"];
	
    $sql = "DELETE FROM FuncionarioADM WHERE CPF= $CPF";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionário ADM apagado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionário ADM não foi deletado com sucesso.\");
				</script>";
        $conectar->close();
    }
?>

