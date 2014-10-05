<h1>Add Novo Post</h1>

<?php echo $this->Form->create('Post', array('action' => 'add')),
		   $this->Form->input('name'),
		   $this->Form->input('password'),
		   $this->Form->end('Salvar');		
 ?>

 </br>

<?=$this->Html->link('listar POst', array('controller' => 'posts', 'action' => 'index'));