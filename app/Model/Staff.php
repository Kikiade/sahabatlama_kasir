<?php
    class Staff extends AppModel{
        var $hasMany    =   array( "SalesLog");

        public $validate = array(
            'name' => array (
                'rule' => 'NotEmpty'
            ),
            'address' => array(
                'rule' => 'NotEmpty'
            ),
            'mobile_phone' => array(
                'rule' => 'NotEmpty'
            ),
            'status' => array(
                'valid' => array(
                    'rule' => array('inList', array('0', '1')),
                    'message' => 'Please enter a valid status',
                    'allowEmpty' => false
                )
            )
        );

        public function isOwnedBy ($staff, $user){
            return $this->field('id', array('id' => $staff, 'user_id' => $user)) !==false;   
        }
    }
?>