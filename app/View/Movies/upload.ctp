<?php
	echo $this->form->create('Movie', array('controller'=>'movies', 'action'=>'import', 'type'=>'file'));
	echo $this->form->input('txt', array('type'=>'file'));
	echo $this->form->end('Enviar');
?>