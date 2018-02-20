<?php
    include "conexao.php";
	$resultado=mysqli_query($conectar,"SELECT * FROM projeto ORDER BY codigo");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Lista de Projeto</h1>
  </div>

  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Data_Inicial</th>
			<th>Data_Final</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['Codigo']."</td>";
						echo "<td>".$linhas['Nome']."</td>";
						echo "<td>".$linhas['DataInicial']."</td>";
						echo "<td>".$linhas['DataFinal']."</td>";
						?>
						<td>
		
						<a href='index.php?link=24&Codigo=<?php echo $linhas['Codigo']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_projeto.php?Codigo=<?php echo $linhas['Codigo']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>						
						<?php
						
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
  </div>
</div>


   