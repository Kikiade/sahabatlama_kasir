<?php
    class VehicleCategoryCost extends AppModel{
        public $belongsTo = array(
            'VehicleCategory' => array(
                'className' => 'VehicleCategory',
                'foreignKey' => 'vehicle_category_id',
                'fields' => array('VehicleCategory.name')
            )
        );
        
        public $validate = array(
            'name' => array(
                'rule' => 'notEmpty'
            ),
            'cost' => array(
                'rule' => 'notEmpty'
            ),
            'status' => array(
                'rule' => 'notEmpty'
            ),
            'vehicle_category_id' => array(
                'rule' => 'notEmpty'
            )
        );
    }
?>