<?php
	include_once "../conexao.php";
	$cpf = $_POST["CPF"];
	$horarioinicio = $_POST["HorarioInicio"];
	$horariosaida = $_POST["HorarioSaida"];
    $numsala = $_POST["NumSala"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO funcionarioadm (CPF, HorarioInicio, HorarioSaida, NumSala)
    VALUES ('$cpf', '$horarioinicio', '$horariosaida', '$numsala')";

     if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_ADM cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_ADM não foi cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    }
?>

