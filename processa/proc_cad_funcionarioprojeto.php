<?php
	include_once "../conexao.php";
	$cpf = $_POST["CPF"];
	$codigoprojeto = $_POST["CodProjeto"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO departamento (CPF, CodProjeto)
    VALUES ('$cpf', '$codigoprojeto')";

        if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_Projeto cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Funcionário_Projeto não foi cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    }
?>

