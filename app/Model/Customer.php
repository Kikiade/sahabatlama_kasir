<?php
	class Customer extends AppModel{
		var $belongsTo = array(
			'VehicleCategoryId' => array(
				'className' => 'vehicle_category',
				'foreignKey' => 'vehicle_category_id'
			   )
			);

		public $validate = array(
			'name' => array(
				'rule' => 'NotEmpty'
				),
				'vehicle_number' => array(
					'rule' => 'NotEmpty')
			);
	}
?>