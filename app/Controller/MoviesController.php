<?php
	class MoviesController extends AppController{
		public $name = 'Movies';
		public $uses = array('Movie', 'Gender', 'Rent');

		public function index(){
			$nr = $this->Movie->find('count');
			$this->set('nr', $nr); 
			$rents = $this->Rent->find('all');
			$c = 0;
			foreach ($rents as $n){
				$c = $n['Rent']['qt'];
				$c++;
			}
			$this->set('nrAlugados', $c);
		}

		public function add(){
			$genders = $this->Gender->find('list');
			$this->set('genders', $genders);
			if($this->data){
				if($this->Movie->save($this->data)){
					$this->redirect(array('controller'=>'movies', 'action'=>'index'));
				}
			}
		}

		public function all(){
			$movies = $this->Movie->find('all');
			$this->set('movies', $movies);
		}

		public function edit($id = nul){
			$genders = $this->Gender->find('list');
			$this->set('genders', $genders);
			if($this->data){
				if($this->Movie->save($this->data)){
					$this->redirect(array('controller'=>'movies', 'action'=>'index'));
				}
			}
			else{
				$this->data = $this->Movie->read(null, $id);
			}
		}

		public function del($id){
			if($this->Movie->delete($id)){
				$this->redirect(array('controller'=>'movies', 'action'=>'index'));
			}
		}

		public function search(){
			$name = $this->data['Movie']['name'];
			$this->set('term', $name);
			$movies = $this->Movie->find('all', array(
				'conditions' => array(
					'Movie.name ILIKE' => '%'.$name.'%' 
				)
			));
			$this->set('movies', $movies);
		}

		public function buscar(){

		}

		public function rent($id){
			$Movie = $this->Movie->find('first', array(
				'conditions' => array(
					'Movie.id' => $id
				)
			));
			$this->set('idMovie', $id);
			$this->set('nameMovie', $Movie['Movie']['name']);
			$this->set('qtMovie', $Movie['Movie']['copy']);
		}




		public function up(){
			debug($this->data);
			$id      = $this->data['Movie']['id'];
			//$cp      = $this->data['Movie']['copy'];
			$cp = 1; 
			$nmMovie = $this->data['Movie']['name'];
			$Movie = $this->Movie->find('first', array(
				'conditions' => array(
					'Movie.id' => $id
				)
			));

			if($cp > $Movie['Movie']['copy'] || $cp <= 0){
				debug('Numero de copias maior do que o estoque');
			}
			else{

				$dataRent = array(
				    'Rent' => array(
				        'qt'    => $cp,
				        'movie_id'    => $id,
				        'movie_name'  => $Movie['Movie']['name']
				    )
				);	

				$this->Rent->save($dataRent);
				$newNum = $Movie['Movie']['copy'] - $cp;
				$this->Movie->id = $Movie['Movie']['id'];
				$this->Movie->saveField('copy', $newNum);
				$this->redirect(array('controller'=>'movies', 'action'=>'index'));
			}
		}




		public function import(){

			
			$arqTemp = $this->data['Movie']['txt']['tmp_name'];
			$arqDes  = 'files/in.txt';
			copy($arqTemp, $arqDes);

			$file = new File($arqDes);
			$conteudo = $file->read();
			$lines = count(file($arqDes));
			$this->set('lines', $lines);

			
			$ct = explode("\n", $conteudo);	

			foreach ($ct as $c) {
				$c = explode(';', $c);
				$data = array(
				    'Movie' => array(
				        'name'    => $c['0'],
				        'year'    => $c['1'],
				        'copy'    => $c['2'],
				        'genders' => $c['3']
				    )
				);	
				$this->Movie->saveAll($data);
				
			}
			unlink($arqDes);
			$this->redirect(array('controller'=>'movies', 'action'=>'index'));
			
		}

		public function upload(){

		}


	}
?>