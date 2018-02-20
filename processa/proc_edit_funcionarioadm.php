<?php
include_once "../conexao.php";
$cpf = $_POST["CPF"];
$horarioinicio = $_POST["HorarioInicio"];
$horariosaida = $_POST["HorarioSaida"];
$numsala = $_POST["NumSala"];

$sql = "UPDATE funcionarioadm set CPF='$cpf', HorarioInicio='$horarioinicio', HorarioSaida='$horariosaida', NumSala='$numsala' WHERE CPF='$cpf'";

if ($conectar->query($sql) === TRUE) {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionario_ADM editado com sucesso.\");
				</script>";
	$conectar->close();
} else {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Funcionario_ADM não foi editado com sucesso.\");
				</script>" . $conn->error;
	$conectar->close();
}
?>
<!--
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		?php
		if(mysql_affected_rows() != 0){
			echo"
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://interceptors.esy.es/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário editado com sucesso.\");
				</script>
			";
		}else{
			echo"
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://interceptors.esy.es/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi editado com sucesso.\");
				</script>
			";

		}
		?>
	</body>
</html>
