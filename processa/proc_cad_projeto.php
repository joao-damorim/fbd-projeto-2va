<?php
	include_once "../conexao.php";
	$codigo = $_POST["Codigo"];
	$nome = $_POST["Nome"];
	$datainicial = $_POST["DataInicial"];
    $datafinal = $_POST["DataFinal"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO Projeto (Codigo, Nome, DataInicial, DataFinal)
    VALUES ('$codigo', '$nome', '$datainicial', '$datafinal')";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto cadastrado com sucesso.\");
				</script>
			";
			$conectar->close();
    } else {
        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=22'>
				<script type=\"text/javascript\">
					alert(\"Projeto não foi cadastrado com sucesso.\");
				</script>
			";
			$conectar->close();
    }

?>
<!DOCTYPE html>
<!--
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>
	
	<body>
		?php
        
		if(mysqli_affected_rows() != 0){
			echo"
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://interceptors.esy.es/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com sucesso.\");
				</script>
			";
		}else{
			echo"
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://interceptors.esy.es/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com sucesso.\");
				</script>
			";
			
		}	
		?>
	</body>
</html>
