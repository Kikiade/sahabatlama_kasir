<?php
	class Customer extends AppModel{
		public $validate = array(
			'name' => array(
				'rule' => 'NotEmpty'
				),
				'vehicle_number' => array(
					'rule' => 'NotEmpty')
			);
	}
?>