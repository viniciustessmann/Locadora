<h1 class="page-header">
    Alugar <small><?php echo $nameMovie; ?></small></br>
    Número de cópias disponivéis <small><?php echo $qtMovie; ?></small>
</h1>

<?php
	echo $this->form->create('Movie', array('controller'=>'movies', 'action'=>'up'));
	echo $this->form->input('id', array('type'=>'hidden', 'value'=> $idMovie));
	//echo $this->form->input('copy', array('class'=>'form-control', 'label'=>'Número de cópias'));
	if($qtMovie > 0){
		echo $this->form->end('Alugar');
	}
	else{

		echo "Desculpe, todas as cópias deste filme estão alugadas.";
	}
?>