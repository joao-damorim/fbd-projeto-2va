<?php
    include_once "conexao.php";
	$coddept = $_GET['CodDept'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM departamento WHERE CodDept = '$coddept' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Editar Departamento</h1>
  </div>
  <div class="row espaco">
	<div class="pull-right">
		<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>		
						
		<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
	</div>
  </div>
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_edit_departamento.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">CodDept</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CodDept" placeholder="Código do Departamento" value="<?php echo $resultado['CodDept']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Nome" placeholder="Nome do Departamento" value="<?php echo $resultado['Nome']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Gerente</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Gerente" placeholder="Gerente do Departamento" value="<?php echo $resultado['Gerente']; ?>">
			</div>
		  </div>
		 		  
		  <input type="hidden" name="CodDept" value=<?php echo $resultado['CodDept']?>>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div> 