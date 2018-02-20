<?php
	include_once("../conexao.php");
	$CodDept = $_POST["CodDept"];
	$Nome = $_POST["Nome"];
	$Gerente = $_POST["Gerente"];

    
    $sql = "UPDATE departamento set CodDept='$CodDept', Nome='$Nome', Gerente='$Gerente' WHERE CodDept='$CodDept'";

    if ($conectar->query($sql) === TRUE) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento editado com sucesso.\");
				</script>";
        $conectar->close();
    } else {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento não foi editado com sucesso.\");
				</script>" . $conn->error;
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
