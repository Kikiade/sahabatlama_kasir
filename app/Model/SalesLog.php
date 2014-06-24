<?php
	class SalesLog extends AppModel{
		var $belongsTo = array(
			'VehicleCategory' => array(
				'className' => 'VehicleCategory',
				'foreignKey' => 'vehicle_id',
				'fields' => array('VehicleCategory.name', 'VehicleCategory.price', 'VehicleCategory.nyuci_share')
			   ),
			'Staff' => array(
				'className' => 'Staff',
				'foreignKey' => 'staff_id',
				'fields'	=> array('Staff.name'),
			   ),
		);
	}
?>