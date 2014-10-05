<h1 class="page-header">
    Gênero <small>Adiconar</small>
</h1>

<?php
	echo $this->form->create('Gender');
	echo $this->form->input('name', array('label'=>'Nome do Gênero', 'class'=>'form-control'));
	echo $this->form->end('Salvar', array('class'=>'btn'));
?>