<?php
	include_once("../conexao.php");
	$codigo = $_POST["Codigo"];
	$nome = $_POST["Nome"];
	$datainicial = $_POST["DataInicial"];
	$datafinal = $_POST["DataFinal"];

    $sql = "UPDATE projeto set Codigo='$codigo', Nome='$nome', DataInicial='$datainicial', DataFinal='$datafinal' WHERE Codigo='$codigo'";

    if ($conectar->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto editado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto não foi editado com sucesso.\");
				</script>" . $conn->error;
        $conectar->close();
    }   
?>

