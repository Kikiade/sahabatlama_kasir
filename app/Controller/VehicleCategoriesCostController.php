<?php
    class VehicleCategoriesCost extends AppController{
        var $hepers = array('Html', 'Form', 'Session');
        var $components = array('Session');
        
        function index(){
            $vehicle_categories = $this->VehicleCategoriesCost->find('all');
            $this->set('Vehicle_Categories_Cost', $vehicle_categories);
        }
    }
?>