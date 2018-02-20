<?php
	include_once "../conexao.php";
	$coddept = $_POST["CodDept"];
	$nome = $_POST["Nome"];
	$gerente = $_POST["Gerente"];
	#$query = mysqli_query($conectar, "INSERT INTO departamento (CodDept, Nome, Gerente) VALUES ('$coddept', '$nome', '$gerente', NOW())");

    $sql = "INSERT INTO departamento (CodDept, Nome, Gerente)
    VALUES ('$coddept', '$nome', '$gerente')";

    if ($conectar->query($sql) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
				http://localhost/fbd-projeto-2va/index.php?link=6'>
				<script type=\"text/javascript\">
					alert(\"Departamento não foi cadastrado com sucesso.\");
				</script>
                ";
         $conectar->close();
    }
?>

