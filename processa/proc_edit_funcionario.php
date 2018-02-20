<?php
	include_once("../conexao.php");
	$cpf = $_POST["CPF"];
	$nome = $_POST["Nome"];
	$telefone = $_POST["Telefone"];
	$salario = $_POST["Salario"];
	$tipo = $_POST["Tipo"];
	$coddept = $_POST["CodDept"];
    
    $sql = "UPDATE funcionario set CPF='$cpf', Nome='$nome', Telefone='$telefone', Salario='$salario', Tipo='$tipo', CodDept='$coddept' WHERE CPF='$cpf'";

    if ($conectar->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Funcionário editado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Funcionário não foi editado com sucesso.\");
				</script>" . $conn->error;
        $conectar->close();
    }   
?>

