<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome do Evento</th>
			<th>Preço do Ingresso</th>
			<th>Descrição</th>
		</tr>
	</thead>

	<tbody>
		<?php
			foreach($eventos as $evento) {
		?>
		<tr>
			<td><?= $evento['id']; ?></td>
			<td><?= $evento['nome']; ?></td>
			<td><?= $evento['preco']; ?></td>
			<td><?= $evento['descricao']; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
