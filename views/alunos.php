
<div style="height: 64vh;">
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Data nascimento</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['dtnascimento'].'</td>';
			}
			?>
	</tbody>

</table>
</div>