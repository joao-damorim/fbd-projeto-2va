<?php
	include_once "../conexao.php";
	$cpf = $_POST["CPF"];
	$nome = $_POST["Nome"];
	$telefone = $_POST["Telefone"];
    $salario = $_POST["Salario"];
    $tipo = $_POST["Tipo"];
    $CodDept = $_POST["CodDept"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO funcionario (CPF, Nome, Telefone, Salario, Tipo, CodDept)
    VALUES ('$cpf', '$nome', '$telefone', '$salario', '$tipo', '$CodDept')";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Funcionário cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Funcionário não foi cadastrado com sucesso.\");
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
