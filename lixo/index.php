<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="João D'Amorim">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Interceptors</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		unset($_SESSION['usuarioId'],
		      $_SESSION['usuarioNome'],
		      $_SESSION['usuarioNivelAcesso'],
		      $_SESSION['usuarioLogin'],
		      $_SESSION['usuarioSenha']);
	?>

    <div class="container">
      <form class="form-signin" method="POST" action="valida_login.php">
		<h1 class="form-signin-heading text-center">Projeto Interceptors</h1>
        <h5 class="text-center">Área para Usuário Cadastrado</h5>
        <label for="inputEmail" class="sr-only">Usuário</label>
		<input type="text" name="usuario" class="form-control" placeholder="Digite o usuário" required autofocus><br />
        <label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
        <!--<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
		<h4 class="text-center text-success bg-success">Primeiro Acesso</h4>
		<h6 class="text-center text-danger bg-danger">Usuário: <strong>admin</strong></h6>
		<h6 class="text-center text-danger bg-danger">Senha: <strong>admin</strong></h6>
      </form>
		<p class="text-center text-danger">
			<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
