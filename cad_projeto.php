<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Cadastrar Projeto</h1>
  </div>
 
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_cad_projeto.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Codigo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Codigo" placeholder="Código do Projeto">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Nome" placeholder="Nome do projeto">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">DataInicial</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="DataInicial" placeholder="YYYY-MM-DD">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">DataFinal</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="DataFinal" placeholder="YYYY-MM-DD">
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