<?php
	class CustomersController extends AppController{
		var $helpers = array('Html', 'Form', 'Paginator');
		var $components = array('Session');
		
		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('index', 'view', 'add', 'edit', 'delete');
		}
		
		public function index()
		{
			Configure::write('debug', 2);
			//pr ($data);
			
			//paging page
			$this->paginate = array(
				 'limit' => 2
			);
			$customers = $this->paginate('Customer');
			$this->set('customers', $customers);
		}

		public function add()
		{
			$this->set('vehicle_categories', $this->Customer->VehicleCategory->find(
            'list',
            array(
                'order' => array('VehicleCategory.id')
            )));

			if($this->request->is('post')){
				$this->Customer->create();
				 if($this->Customer->save($this->request->data)){
					$this->Session->setFlash(__('Your new customers has been saved'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setflash(__('Unable to add new customers'));
			}
		}

		public function view($id = null){
			if(!$id){
				throw new NotFoundException(__('Invalid Customer'));
			}
			$customers = $this->Customer->findById($id);
			if(!$id){
				throw new NotFoundException(__('Invalid Customer'));
			}
			$this->set('post', $customers);
		}

		public function edit($id = null){
			$this->set('vehicle_categories', $this->Customer->VehicleCategory->find(
            'list',
            array(
                'order' => array('VehicleCategory.id')
            )));

			if(!$id){
				throw new NotFoundException(__('Invalid Customer'));
			}
			$customers = $this->Customer->findById($id);
			if (!$customers){
				throw new NotFoundException(__('Invalid Customer'));
			}
			
			if ($this->request->is(array('post', 'put'))){
				$this->Customer->id = $id;
				if($this->Customer->save($this->request->data)){
					$this->Session->setFlash(__('your Customer has been updated'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('unable to updated your Customer'));
			}
			if(!$this->request->data){
				$this->request->data = $customers;
			}
		}
		
		public function delete($id = null){
			if($this->Customer->delete($id)){
				$this->Session->setFlash(
				   __('The Vehicle Categories with id %s has been deleted.', ($id))
			);
			return $this->redirect(array('action' => 'index'));
			}
		}
	}

?>