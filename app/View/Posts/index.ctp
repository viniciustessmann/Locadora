<h1>Posts</h1>



<table>
		<tr>
			<td>Name</td>
			<td>Criado</td>
			<td>editar</td>
			<td>excluir</td>
			<td>visualizar</td>


		</tr>

		<tr>

			<?php

			foreach($posts as $post): ?>
				<td><?=$post['Post']['name'] ?></td>
				<td><?=$post['Post']['created'] ?></td>
				<td><?=$this->Html->link('Editar', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></td>
				<td><?=$this->Html->link('Excluir', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id']), null, 'Deseja excluir esse post'); ?></td>
				<td><?=$this->Html->link('Visualizar', array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
			<?php	endforeach; ?>

		</tr>
</table>

</br>
<?php
echo 
$this->paginator->prev('Anterior'),
$this->paginator->numbers(),
$this->paginator->next('Proximo') ?>
</br>
<?=$this->Html->link('Adicionar POst', array('controller' => 'posts', 'action' => 'add'));
?>