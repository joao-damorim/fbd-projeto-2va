﻿<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
       	$conectar = mysqli_connect("localhost", "root", "", "projeto2va") or die ("Erro na conexão");
	mysqli_select_db($conectar,"projeto2va") or die ("Base não encontrada")
    /*
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }*/
?>