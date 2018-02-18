<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
       	$conectar = mysqli_connect("localhost", "root", "") or die ("Erro na conexão");
	mysqli_select_db($conectar,"tcc") or die ("Base não encontrada")
?>