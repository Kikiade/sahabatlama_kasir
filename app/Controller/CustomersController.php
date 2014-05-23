<?php
	class CustomersController extends AppController
	{
		public function beforeFilter()
		{
			$this->Auth->allow('index', 'view', 'add', 'edit');
		}
		
		public function index()
		{
			$customers = $this->Customer->find('all');
			$this->set('customers', $customers);

			$data = $this->Customer->find('all', array("conditions" => array("Customer.id" => "1")));
			pr ($data);
		}

		public function add()
		{
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
	}

?>-