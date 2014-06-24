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
<?php
/**
SELECT staf.name, vehicle.price, vehicle.nyuci_share, vehicle.name
FROM sales_logs AS SalesLog
LEFT JOIN staffs AS staf ON SalesLog.user_id = staf.id
LEFT JOIN vehicle_categories AS vehicle ON SalesLog.vehicle_id = vehicle.id


SELECT SalesLog.id, COUNT( staf.name ) AS JumlahNyuci, staf.name, vehicle.name, vehicle.nyuci_share, SUM( vehicle.nyuci_share ) AS Gaji
FROM sales_logs AS SalesLog
LEFT JOIN staffs AS staf ON SalesLog.user_id = staf.id
LEFT JOIN vehicle_categories AS vehicle ON SalesLog.vehicle_id = vehicle.id
GROUP BY staf.name
*/
?>