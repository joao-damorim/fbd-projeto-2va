<?php
    include "conexao.php";
	$resultado=mysqli_query($conectar,"SELECT * FROM funcionarioprojeto ORDER BY CPF");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="page-header">
	<h1>Lista de Funcionário_Projeto</h1>
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
			<th>CPF</th>
			<th>CodProjeto</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['CPF']."</td>";
						echo "<td>".$linhas['CodProjeto']."</td>";
						?>
						<td>
						<a href='index.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						
						<a href='index.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>						
						<?php
						
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
  </div>
</div> <!-- /container -->


   