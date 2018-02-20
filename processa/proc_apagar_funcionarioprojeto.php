<?php
	include_once "../conexao.php";
	$cpf = $_GET["CPF"];
	
    $sql = "DELETE FROM funcionarioprojeto WHERE CPF= $cpf";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário Projeto apagado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário Projeto não foi deletado com sucesso.\");
				</script>";
        $conectar->close();
    }
?>
