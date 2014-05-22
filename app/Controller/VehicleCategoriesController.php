<?php
	class VehicleCategoriesController extends AppController{
		public $helpers = array('Html','Form');
		
		public function beforeFilter(){
			parent::beforeFilter();
		            $this->Auth->allow('add', 'edit', 'Form');
	        }
		
		
		public function beforeFilter()
		{
			$this->Auth->allow('index', 'view');
		}
		public function index(){
			$categories = $this->VehicleCategory->find('all');
			$this->set('vehicle_categories', $categories);
			
			$data	=	$this->VehicleCategory->find("all",array(
						"conditions"	=>	array(
							"VehicleCategory.id"	=>	"1"
						)
					));
			pr($data);
		}
		
		public function add()
		{
			if($this->request->is('post')){
				$this->VehicleCategory->create();
				 if($this->VehicleCategory->save($this->request->data)){
					$this->Session->setFlash(__('Your new categories has been saved'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setflash(__('Unable to add new categories'));
			}
		}
		
		public function view($id = null){
			if(!$id){
				throw new NotFoundException(__('Invalid Category'));
			}
			$categories = $this->VehicleCategory->findById($id);
			if(!$id){
				throw new NotFoundException(__('Invalid Category'));
			}
			$this->set('post', $categories);
		}
		
		public function edit($id = null){
			if(!$id){
				throw new NotFoundException(__('Invalid Category'));
			}
			$categories = $this->VehicleCategory->findById($id);
			if (!$categories){
				throw new NotFoundException(__('Invalid Category'));
			}
			
			if ($this->request->is(array('post', 'put'))){
				$this->VehicleCategory->id = $id;
				if($this->VehicleCategory->save($this->request->data)){
					$this->Session->setFlash(__('your category has been updated'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('unable to updated your category'));
			}
			if(!$this->request->data){
				$this->request->data = $categories;
			}
		}
		
	}
?>