<?php
	include_once("../conexao.php");
	$cpf = $_POST["CPF"];
	$cargo = $_POST["Cargo"];
	$datainicial = $_POST["DataInicial"];
	$datafinal = $_POST["DataFinal"];
    $coddept = $_POST["CodDept"];


    $sql = "UPDATE historico_funcionario set CPF='$cpf', Cargo='$cargo', DataInicial='$datainicial', DataFinal='$datafinal', CodDept= '$coddept' WHERE CPF='$cpf'";

    if ($conectar->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico_Funcionário editado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico_Funcionário não foi editado com sucesso.\");
				</script>" . $conn->error;
        $conectar->close();
    }   
?>

