<?php
    class Content extends AppModel{
        public $belongsTo = array(
            'NewsContent' => array(
                'className' => 'NewsContent',
                'foreignKey' => 'model_id'
            )
        );
        
        public $validate = array(
            'modelname' => array (
                'rule' => 'NotEmpty'
            ),
            'type' => array(
                'rule' => 'NotEmpty'
            ),
            'host'=> array(
                'rule' => 'NotEmpty' 
            ),
            'url' => array(
                'rule' => 'NotEmpty'   
            )
        );
    }
?>