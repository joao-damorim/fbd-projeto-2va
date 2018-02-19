<?php
	include_once "../conexao.php";
	$cpf = $_GET["CPF"];
	
    $sql = "DELETE FROM historico_funcionario WHERE CPF= $cpf";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico Funcionário apagado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=26'>
				<script type=\"text/javascript\">
					alert(\"Histórico Funcionário não foi deletado com sucesso.\");
				</script>";
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
					alert(\"Usuário apagado com sucesso.\");
				</script>
			";
		}else{
			echo"
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://interceptors.esy.es/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi apagado com sucesso.\");
				</script>
			";
			
		}	
		?>
	</body>
</html>
