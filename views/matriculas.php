
<div style="height: 64vh;">
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>'; 
			}
		?>
	</tbody>
</table>
</div>