<?php
	class VehicleCategoriesController extends AppController{
		public $helpers = array('Html','Form');
		
		public function index(){
			$this->set('vehicle_categories', $categories);
			$categories = $this->VehicleCategories->find('all');	
		}
		
		public function add(){
			if($this->request->is('post')){
				$this->VehicleCategories->create();
				if($this->VehicleCategories->save($this->request->data)){
					$this->Session->setFlash(__('Your new categories has been saved'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setflash(__('Unable to add new categories'));
			}
		}
	}
?>