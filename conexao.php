<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projeto2va";

    // Criar conexão
    $conectar = new mysqli($servername, $username, $password, $dbname);
    // Checar conexão
    if ($conectar->connect_error) {
        die("Connection failed: " . $conectar->connect_error);
    } 
    /*
	error_reporting(E_ALL ^ E_DEPRECATED);
       	$conectar = mysqli_connect("localhost", "root", "", "projeto2va") or die ("Erro na conexão");
	mysqli_select_db($conectar,"projeto2va") or die ("Base não encontrada")
    
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }*/
?>