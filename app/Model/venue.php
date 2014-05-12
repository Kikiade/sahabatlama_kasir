<?php
    class Venue extends AppModel{
        var $name = 'Venue';
        var $primayKey = 'id_venue';
        
        public $validate = array(
            'title' => array(
                'rule' => 'notEmpty'
            )
        );
    }
    
?>