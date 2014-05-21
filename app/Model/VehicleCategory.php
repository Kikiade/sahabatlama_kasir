<?php
	class VehicleCategory extends AppModel{
		public $validate = array(
			'name' => array(
				'rule' => 'NotEmpty'
			),
			'price' => array(
				'rule' => 'NotEmpty'
			),
			'nyuci_share' => array(
				'rule' => 'NotEmpty'
			),
		);
	}
?>