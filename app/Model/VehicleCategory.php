<?php
	class VehicleCategory extends AppModel{
		
		var $hasMany	=	array(
						"VehicleCategoryCost", "Customer"
					);
					
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