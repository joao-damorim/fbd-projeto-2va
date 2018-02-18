<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysql_query("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="page-header">
	<h1>Visualizar Usuário</h1>
  </div>
  <div class="row">
	<div class="pull-right">
		<a href='index.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>
						
		<a href='index.php?link=4&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
		<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
	</div>
  </div>		
  <div class="row">
	<div class="col-md-12">
		<div class="col-xs-3 col-md-1">
			<b>Id:</b>	
		</div>
		<div class="col-xs-9 col-md-11">
			<?php echo $resultado['id']; ?>					
		</div>
		<div class="col-xs-3 col-md-1">
			<b>Nome:</b> 		
		</div>
		<div class="col-xs-9 col-md-11">
			<?php echo $resultado['nome']; ?>					
		</div>
		<div class="col-xs-3 col-md-1">
			<b>E-mail:</b> 		
		</div>
		<div class="col-xs-9 col-md-11">
			<?php echo $resultado['email']; ?>					
		</div>
		<div class="col-xs-3 col-md-1">
			<b>Usuário:</b> 		
		</div>
		<div class="col-xs-9 col-md-11">
			<?php echo $resultado['login']; ?>					
		</div>
		<div class="col-xs-3 col-md-1">
			<b>Nível de Acesso:</b>		
		</div>
		<div class="col-xs-9 col-md-11">
			<?php echo $resultado['nivel_de_acesso_id']; ?>					
		</div>
	</div>
  </div>
</div> <!-- /container -->