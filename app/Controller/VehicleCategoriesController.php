<?php
	class VehicleCategoriesController extends AppController{
		public $helpers = array('Html','Form');
		
		public function index(){
			$categories = $this->Category->find('all');
			
			$this->set('vehicle_categories', $categories);	
		}
		
		public function add(){
			
		}
	}
?>