<h1 class="page-header">
    Gênero <small>Adiconar</small>
</h1>

<?php
	echo $this->form->create('Gender', array('controller'=>'genders','action'=>'edit'));
	echo $this->form->input('id', array('type'=>'hidden'));
	echo $this->form->input('name', array('label'=>'Nome do Gênero', 'class'=>'form-control'));
	echo $this->form->end('Atualizar', array('class'=>'btn'));
?>