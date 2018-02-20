<?php
	include_once("../conexao.php");
	$cpf = $_POST["CPF"];
	$codprojeto = $_POST["CodProjeto"];
	
	$sql = "UPDATE funcionarioprojeto set CPF='$cpf', CodProjeto='$codprojeto' WHERE CPF='$cpf'";
	
	if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_Projeto cadastrado com sucesso.\");
				</script>
			";
			$conectar->close();
    } else {
        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_Projeto não foi cadastrado com sucesso.\");
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
