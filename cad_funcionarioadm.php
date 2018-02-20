<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Cadastrar Funcionário_ADM</h1>
  </div>
 
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_cad_funcionarioadm.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="CPF" placeholder="XXXXXXXXXXX">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Horário de Inicio</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="HorarioInicio" placeholder="HH:MM:SS">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Horário de Saida</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="HorarioSaida" placeholder="HH:MM:SS">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Número da Sala</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="NumSala" placeholder="Sala">
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