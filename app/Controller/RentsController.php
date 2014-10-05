<?php
	class RentsController extends AppController{
		public $name = 'Rents';
		public $uses = array('Rent', 'Movie');

		public function index(){
			$nr = $this->Rent->find('all');
			$c = 0;
			foreach ($nr as $n){
				$c = $n['Rent']['qt'];
				$c++;
			}
			$this->set('nr', $c);
		}

		public function all(){
			$rents = $this->Rent->find('all');
			$this->set('rents', $rents);
		}

		public function receives($id){
			$rent = $this->Rent->find('all', array(
				'conditions' => array(
					'Rent.id' => $id
				)
			));

			foreach ($rent as $r){
				$qtAlugado = $r['Rent']['qt'];
				$idMovie   = $r['Rent']['movie_id'];
			}

			$movie = $this->Movie->find('all', array(
				'conditions' => array(
					'Movie.id' => $idMovie
				)
			));

			foreach ($movie as $m){
				$qtEst = $m['Movie']['copy'];
			}

			$qtAtualiza = $qtAlugado + $qtEst;
			$this->Movie->id = $idMovie;
			$this->Movie->saveField('copy', $qtAtualiza);
			$this->Rent->delete($id);
			$this->redirect(array('controller'=>'movies', 'action'=>'index'));
		}
	}
?>