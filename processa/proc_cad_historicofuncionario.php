<?php
	include_once "../conexao.php";
	$cpf = $_POST["CPF"];
	$cargo = $_POST["Cargo"];
	$datainicial = $_POST["DataInicial"];
    $datafinal = $_POST["DataFinal"];
    $coddept = $_POST["CodDept"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO departamento (CPF, Cargo, DataInicial, DataFinal, CodDept)
    VALUES ('$cpf', '$cargo', '$datainicial', '$datafinal', '$coddept')";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico_Funcionário cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico_Funcionário não foi cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    }
?>

