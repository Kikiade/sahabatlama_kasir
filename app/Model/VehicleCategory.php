<?php
	class VehicleCategory extends AppModel{
		var $hasMany	=	array(
						"VehicleCategoryCost"
					);
	}
?>