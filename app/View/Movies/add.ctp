<h1 class="page-header">
    Filme <small>Adiconar</small>
</h1>

<?php
	echo $this->form->create('Movie');
	echo $this->form->input('name', array('label'=>'Nome do filme', 'class'=>'form-control'));
	//echo $this->form->input('genders', array('label'=>'Tag de Gênero', 'class'=>'form-control'));
	echo $this->form->input('gender_id', array(
											'label'=>'Gênero', 
											'class'=>'form-control',
											'empty'=>'Selecione um gênero', 
											'options' => $genders
										));
	echo $this->form->input('copy', array('label'=>'Número de cópias', 'class'=>'form-control'));
	echo $this->form->input('year', array('label'=>'Ano do filme', 'class'=>'form-control'));
	echo $this->form->end('Salvar', array('class'=>'btn'));
?>