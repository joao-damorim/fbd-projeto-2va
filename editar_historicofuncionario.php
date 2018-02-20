<?php
    include_once("conexao.php");
	$cpf = $_GET['CPF'];
	//Executa consulta
	$result = mysqli_query($conectar, "SELECT * FROM historico_funcionario WHERE CPF = '$cpf' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Editar Histórico_Funcionário</h1>
  </div>
  <div class="row espaco">
	<div class="pull-right">
		<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>		
						
		<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
	</div>
  </div>
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_edit_historicofuncionario.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CPF" placeholder="CPF" value="<?php echo $resultado['CPF']; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Cargo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Cargo" placeholder="Cargo do Funcionário" value="<?php echo $resultado['Cargo']; ?>">
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
            
             <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Código do Departamento</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CodDept" placeholder="XX" value="<?php echo $resultado['CodDept']; ?>">
			</div>
		  </div>
		  
		  <input type="hidden" name="CPF" value=<?php echo $resultado['CPF']?>>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div>