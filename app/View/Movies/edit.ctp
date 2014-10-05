<h1 class="page-header">
    Filme <small>Editar</small>
</h1>

<?php
	echo $this->form->create('Movie', array('controller'=>'movies', 'action'=>'edit'));
	echo $this->form->input('id', array('type'=>'hidden'));
	echo $this->form->input('name', array('label'=>'Nome do filme', 'class'=>'form-control'));
	echo $this->form->input('gender_id', array(
											'label'=>'Gênero', 
											'class'=>'form-control',
											'empty'=>'Selecione um gênero', 
											'options' => $genders
										));
	echo $this->form->input('copy', array('label'=>'Número de cópias', 'class'=>'form-control'));
	echo $this->form->input('year', array('label'=>'Ano do filme', 'class'=>'form-control'));
	echo $this->form->end('Atualizar', array('class'=>'btn'));
?>