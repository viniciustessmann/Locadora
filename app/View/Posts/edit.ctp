<h1>edit Novo Post</h1>

<?php echo $this->Form->create('Post', array('action' => 'edit')),
			$this->Form->input('id', array('type' => 'hidden')),
		   $this->Form->input('name'),
		   $this->Form->input('password'),
		   $this->Form->end('Atualizar');		
 ?>

 </br>

<?=$this->Html->link('listar POst', array('controller' => 'posts', 'action' => 'index'));