<?php
    class Staff extends AppModel{
        public $validate = array(
            'name' => array (
                'rule' => 'notEmpty'
            ),
            'address' => array(
                'rule' => 'notEmpty'
            ),
            'mobile_phone' => array(
                'rule' => 'notEmpty'
            ),
            'status' => array(
                'valid' => array(
                    'rule' => array('inList', array('0', '1')),
                    'message' => 'Please enter a valid status',
                    'allowEmpty' => false
                )
            )
        );
    }
?>