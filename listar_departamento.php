<?php
    include "conexao.php";
	$resultado=mysqli_query($conectar,"SELECT * FROM departamento ORDER BY CodDept");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="page-header">
	<h1>Lista de Departamento</h1>
  </div>
  <div class="row espaco">
	<div class="pull-right">
		<a href="index.php?link=3"<button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>		
	</div>
  </div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>CodDept</th>
			<th>Nome</th>
			<th>Gerente</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['CodDept']."</td>";
						echo "<td>".$linhas['Nome']."</td>";
						echo "<td>".$linhas['Gerente']."</td>";
						?>
						<td>
						<a href='index.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						
						<a href='index.php?link=8&CodDept=<?php echo $linhas['CodDept']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_departamento.php?CodDept=<?php echo $linhas['CodDept']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>						
						<?php
						
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
  </div>
</div> <!-- /container -->


   