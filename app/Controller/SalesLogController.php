<?php
	class SalesLogController extends AppController{
		var $helpers = array('Html', 'Form', 'Session');
		
		function beforeFilter()
		{
			$this->Auth->allow('index', 'view', 'add', 'edit', 'delete');
		}
		
		function add()
		{
			if($this->request->is('post')){
				$this->SalesLog->create();
				 if($this->SalesLog->save($this->request->data)){
					$this->Session->setFlash(__('Your new Sales Log has been saved'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setflash(__('Unable to add new Sales Log'));
			}
		}
		function view($id = null){
			/*
			if(!$id){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			*/
			$saleslog = $this->VehicleCategory->findById($id);
			if(!$id){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			$this->set('post', $saleslog);
		}
		function edit($id = null){
			/*
			if(!$id){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			*/
			$saleslog = $this->SalesLog->findById($id);
			if (!$saleslog){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			
			if ($this->request->is(array('post', 'put'))){
				$this->SalesLog->id = $id;
				if($this->SalesLog->save($this->request->data)){
					$this->Session->setFlash(__('your Sales Log has been updated'));
					$this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('unable to updated your Sales Log'));
			}
			if(!$this->request->data){
				$this->request->data = $saleslog;
			}
		}
		function delete($id = null){
			if($this->SalesLog->delete($id)){
				$this->Session->setFlash(
				   __('The Sales Log with id %s has been deleted.', ($id))
			);
			return $this->redirect(array('action' => 'index'));
			}
		}
		function afterFilter(){
			if($this->action!= 'saleslog'){
				$this->authenticate;
			}
		}
	}
?>