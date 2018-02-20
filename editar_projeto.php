<?php
    include_once("conexao.php");
	$codigo = $_GET['Codigo'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM projeto WHERE Codigo = '$codigo' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="page-header">
	<h1>Editar Projeto</h1>
  </div>
  <div class="row espaco">
	<div class="pull-right">
		<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>		
						
		<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
	</div>
  </div>
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_edit_projeto.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Código</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Codigo" placeholder="Código do Projeto" value="<?php echo $resultado['Codigo']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Nome" placeholder="Nome do Projeto" value="<?php echo $resultado['Nome']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="DataInicial" placeholder="YYYY-MM-DD" value="<?php echo $resultado['DataInicial']; ?>">
			</div>
		  </div>
		  
            <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="DataFinal" placeholder="YYYY-MM-DD" value="<?php echo $resultado['DataFinal']; ?>">
			</div>
            </div>
		
		  <input type="hidden" name="Codigo" value=<?php echo $resultado['Codigo']?>>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div> <!-- /container -->