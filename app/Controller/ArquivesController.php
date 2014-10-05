<?php
	class ArquivesController extends AppController{
		public $name = 'Arquives';

		public function add(){
			if($this->data){
				if($this->Arquive->save($this->data)){

				}
			}
		}
	}
?>