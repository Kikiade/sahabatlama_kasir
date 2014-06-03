<?php
	class Customer extends AppModel{
		var $belongsTo = array(
			'VehicleCategory' => array(
				'className' => 'VehicleCategory',
				'foreignKey' => 'vehicle_category_id'
			   )
			);

		public $validate = array(
			'name' => array(
				'rule' => 'NotEmpty'
				),
				'vehicle_number' => array(
					'rule' => 'NotEmpty'
				),
				'vehicle_category_id' => array(
                 'rule' => 'NotEmpty'
            )
		);
	}
?>