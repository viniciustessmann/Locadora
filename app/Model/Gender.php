<?php
	class Gender extends AppModel{
		public $name = 'Gender';
		var $validate = array(
		    'name' => array(
		        'rule' => 'alphaNumeric',
		        'required' => true
		    )
		);
	}
?>