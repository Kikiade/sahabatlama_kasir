<?php
	class VehicleCategory extends AppModel{
<<<<<<< HEAD
		var $hasMany	=	array(
						"VehicleCategoryCost"
					);
=======
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
>>>>>>> fb31cc2658b6c6a17c788905a9a2dfacfce9df40
	}
?>