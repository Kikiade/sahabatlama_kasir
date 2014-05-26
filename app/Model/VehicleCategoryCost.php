<?php
    class VehicleCategoryCost extends AppModel{
        public $belongsTo = array(
            'VehicleCategoryId' => array (
                'className' => 'vehicle_category',
                'foreignKey' => 'vehicle_category_id',
            ),
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
            )
        );
    }
?>