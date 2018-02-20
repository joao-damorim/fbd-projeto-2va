<?php
    include "conexao.php";
	$resultado=mysqli_query($conectar,"SELECT * FROM historico_funcionario ORDER BY CPF");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
	<h1>Lista de Histórico_Funcionário</h1>
  </div>

  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>CPF</th>
			<th>Cargo</th>
			<th>Data_Inicial</th>
			<th>Data_Final</th>
            <th>CodDept</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['CPF']."</td>";
						echo "<td>".$linhas['Cargo']."</td>";
						echo "<td>".$linhas['DataInicial']."</td>";
						echo "<td>".$linhas['DataFinal']."</td>";
                        echo "<td>".$linhas['CodDept']."</td>";
						?>
						<td>
						
						<a href='index.php?link=28&CPF=<?php echo $linhas['CPF']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_historicofuncionario.php?CPF=<?php echo $linhas['CPF']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>						
						<?php
						
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
  </div>
</div>


   