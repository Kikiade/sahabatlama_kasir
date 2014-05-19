<?php
	class VehicleCategoriesController extends AppController{
		public $helpers = array('Html','Form', 'Session');
		public $components = array ('Session');
		
		public function index(){
			$categories = $this->VehicleCategory->find('all');
			$this->set('vehicle_categories', $categories);	
		}
		
		public function add(){
			if($this->request->is('post')){
				$this->VehicleCategory->create();
				 if($this->VehicleCategory->save($this->request->data)){
					$this->Session->setFlash(__('Your new categories has been saved'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setflash(__('Unable to add new categories'));
			}
		}
	}
?>