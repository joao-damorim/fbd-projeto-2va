<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="João D'Amorim">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Administrativo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
	<?php
		include_once("menu_admin.php");
		
		//$link = isset($_GET['link']) ? $_GET['link'] : 1;
		if(isset($_GET['link'])){
			$link = $_GET["link"];
		}
		$pag[1] = "bem_vindo.php";
		$pag[2] = "listar_usuario.php";
		$pag[3] = "cad_usuario.php";
		$pag[4] = "editar_usuario.php";
		$pag[5] = "visual_usuario.php";
        $pag[6] = "listar_departamento.php";
		$pag[7] = "cad_departamento.php";
		$pag[8] = "editar_departamento.php";
		$pag[9] = "visual_departamento.php";
        $pag[10] = "listar_funcionario.php";
		$pag[11] = "cad_funcionario.php";
		$pag[12] = "editar_funcionario.php";
		$pag[13] = "visual_funcionario.php";
        $pag[14] = "listar_funcionarioadm.php";
		$pag[15] = "cad_funcionarioadm.php";
		$pag[16] = "editar_funcionarioadm.php";
		$pag[17] = "visual_funcionarioadm.php";
        $pag[18] = "listar_funcionarioprojeto.php";
		$pag[19] = "cad_funcionarioprojeto.php";
		$pag[20] = "editar_funcionarioprojeto.php";
		$pag[21] = "visual_funcionarioprojeto.php";
        $pag[22] = "listar_projeto.php";
		$pag[23] = "cad_projeto.php";
		$pag[24] = "editar_projeto.php";
		$pag[25] = "visual_projeto.php";
        $pag[26] = "listar_historicofuncionario.php";
		$pag[27] = "cad_historicofuncionario.php";
		$pag[28] = "editar_historicofuncionario.php";
		$pag[29] = "visual_historicofuncionario.php";
     
     
		
		
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}else{
				include "bem_vindo.php";
			}
		}else{
			include "bem_vindo.php";
		}
	?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>