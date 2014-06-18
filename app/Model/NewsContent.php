<?php
    class NewsContent extends AppModel{
        public $belongsTo = array(
            'NewsCategory' => array(
                'className' => 'NewsCategory',
                'foreignKey' => 'news_category_id'
            )    
        );

        public $hasOne = array(
            'Content' => array(
                'className' => 'Content',
                'foreignKey' => 'model_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )
        );
        
        public $validate = array(
            'title' => array (
                'rule' => 'NotEmpty'
            ),
            'description' => array(
                'rule' => 'NotEmpty'
            ),
            'posted'=> array(
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