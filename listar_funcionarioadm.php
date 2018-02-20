<?php
    include "conexao.php";
	$resultado=mysqli_query($conectar,"SELECT * FROM funcionarioadm ORDER BY CPF");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Lista de Funcionário_ADM</h1>
  </div>
 
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>CPF</th>
			<th>Horário_Inicio</th>
			<th>Horário_Saida</th>
			<th>NumSala</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['CPF']."</td>";
						echo "<td>".$linhas['HorarioInicio']."</td>";
						echo "<td>".$linhas['HorarioSaida']."</td>";
						echo "<td>".$linhas['NumSala']."</td>";
						?>
						<td>
						
						<a href='index.php?link=16&CPF=<?php echo $linhas['CPF']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_funcionarioadm.php?CPF=<?php echo $linhas['CPF']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>						
						<?php
						
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
  </div>
</div>


   