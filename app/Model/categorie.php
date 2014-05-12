<?php
    class Categorie extends AppModel{
        var $name = 'Categorie';
        var $primaryKey = 'id_categorie';
        
        public $validate = array(
            'title' => array(
                'rule' => 'notEmpty'
            )
        );
    }
    
?>