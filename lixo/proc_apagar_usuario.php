<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	$id = $_GET["id"];
	
	$query = mysql_query("DELETE FROM usuarios WHERE id = $id");
	$resultado = mysql_query($query);
	$linhas = mysql_affected_rows();
	
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>
	
	<body>
		<?php
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
