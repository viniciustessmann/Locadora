<?php
	class GendersController extends AppController{
		public $name = 'Genders';
		public $uses = array('Gender', 'Movie');

		public function add(){
			if($this->data){
				if($this->Gender->save($this->data)){
					$this->redirect(array('controller'=>'genders', 'action'=>'index'));
				}
			}
		}

		public function index(){
			$nr = $this->Gender->find('count');
			$this->set('nr', $nr);
		}

		public function all(){
			$genders = $this->Gender->find('all');
			$this->set('genders', $genders);
		}

		public function edit($id = null){
			if($this->data){
				if($this->Gender->save($this->data)){
					$this->redirect(array('controller'=>'genders', 'action'=>'index'));
				}
			}
			else{
				$this->data = $this->Gender->read(null, $id);
			}
		}

		public function del($id){
			if($this->Gender->delete($id)){
				$this->redirect(array('controller'=>'genders', 'action'=>'index'));
			}
		}

		public function search($id){
			$this->set('nameGender', 'açao');
			$movies = $this->Movie->find('all', array(
				'conditions' => array(
					'Movie.gender_id' => $id
				)
			));
			$this->set('movies', $movies);
		}
	}
?>