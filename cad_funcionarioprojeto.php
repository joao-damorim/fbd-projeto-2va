<div class="container theme-showcase" role="main">


  <div class="page-header">
	<h1>Cadastrar Funcionário_Projeto</h1>
  </div>
  
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_cad_funcionarioprojeto.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CPF" placeholder="XXXXXXXXXXX">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Código do Projeto</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CodProjeto" placeholder="Código do Projeto">
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div>