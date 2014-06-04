<?php
	class SalesLogsController extends AppController{
		var $helpers = array('Html', 'Form',  'Paginator');
		var $components = array('Session');
		
		function beforeFilter()
		{
			$this->Auth->allow('index', 'view', 'add', 'edit', 'delete');
		}
		function index(){
			$this->set('sales_logs', $this->SalesLog->find('all'));
			/*$data	=	$this->SalesLog->find("all",array(
						"conditions"	=>	array(
							"SalesLog.id"	=>	"1"
						)
					));
			pr($data);*/
			
			//paging page
			$this->paginate = array(
				 'limit' => 2
			);
			$saleslog = $this->paginate('SalesLog');
			$this->set('sales_logs', $saleslog);
		}
		
		
		function view($id = null){
			/*
			if(!$id){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			*/
			$saleslog = $this->SalesLog->findById($id);
			if(!$id){
				throw new NotFoundException(__('Invalid Sales Log'));
			}
			$this->set('post', $saleslog);
		}
		
		function afterFilter(){
			if($this->action!= 'saleslog'){
				$this->authenticate;
			}
		}
	}
?>