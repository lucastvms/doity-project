<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome do Evento</th>
			<th>Preço do Ingresso</th>
			<th>Preço com Desconto</th>
			<th>Descrição</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach($eventos as $evento) {
			?>
			<tr>
				<td><?= $evento['id']; ?></td>
				<td><?= $evento['nome']; ?></td>
				<td><?= $this->Money->format($evento['preco']); ?></td>
				<td><?= $this->Money->format($evento->calculaDesconto()); ?></td>
				<td><?= $evento['descricao']; ?></td>
				<td>
					<?php
					echo $this->Html->Link('Editar', ['controller' => 'eventos', 'action' => 'editar', $evento['id']]);
					?>
					<?php
					echo $this->Form->postLink('Apagar', ['controller' => 'eventos', 'action' => 'apagar', $evento['id']], ['confirm' => 'Tem certeza que deseja apagar o evento ' . $evento['nome'] . '?']);
					?>
				</td>
			</tr>
			<?php
		}
		?>
		<tr>
			<th>
			<?php
				echo $this->Html->Link('Novo Evento', ['controller' => 'Eventos', 'action' => 'novo']);
			?>
			</th>
			<th>
			<?php
				echo $this->Html->Link('Logout', ['controller' => 'Users', 'action' => 'logout']);
			?>
			</th>
		</tr>

	</tbody>
</table>
