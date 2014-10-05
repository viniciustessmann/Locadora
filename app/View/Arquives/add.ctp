<h1 class="page-header">
    Upload de Arquivo <small>Adiconar</small>
</h1>

<?php
	echo $this->form->create('Arquive', array('type'=>'file', 'controller'=>'arquives', 'action'=>'add'));
	echo $this->form->input('des');
	echo $this->form->input('Arquive.photo', array('type'=>'file', 'label'=>'Arquivo TXT'));
	echo $this->form->end('Enviar');
?>
