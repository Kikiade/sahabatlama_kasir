<?php
    class NewsCategory extends AppModel{
        
        public $validate = array(
            'name' => array (
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
    }
?>