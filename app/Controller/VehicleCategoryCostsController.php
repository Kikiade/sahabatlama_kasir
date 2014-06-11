<?php
    class VehicleCategoryCostsController extends AppController{
        var $helpers = array('Html', 'Form', 'Paginator');
        var $components = array('Session');
       
        function beforeFilter(){
            $this->Auth->allow('index', 'view', 'add', 'edit', 'delete');
        }
        function index(){
            $vehicle_category_costs = $this->VehicleCategoryCost->find('all');
			$this->set('vehicle_category_costs', $vehicle_category_costs);
			
			$data	=	$this->VehicleCategoryCost->find('all',array(
						"conditions"	=>	array(
							"VehicleCategoryCost.id"	=>	"1"
						)
					));
			//pr($data);
            //Paging page            
            $this->paginate = array(
                'limit' => 2
            );
            $vehicle_category_costs = $this->paginate('VehicleCategoryCost');
            $this->set('vehicle_category_costs', $vehicle_category_costs);
        }
        function view($id = null){
            if (!$id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));                                                                                           
            }
            $vehicle_category_costs = $this->VehicleCategoryCost->findById($id);
            if (!$id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));
            }
             $this->set('post', $vehicle_category_costs);
        }    
        function add(){
			$this->set('vehicle_categories', $this->VehicleCategoryCost->VehicleCategory->find(
            'list',
            array(
                'order' => array('VehicleCategory.id')
            )));    
            if($this->request->is('post')){
                $this->VehicleCategoryCost->Create();
                if($this->VehicleCategoryCost->save($this->request->data)){
                    $this->Session->setFlash(__('Vehicle category cost has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your Vahicle Category Cost'));
            }
        }
        function edit($id = null){
            $this->set('vehicle_categories', $this->VehicleCategoryCost->VehicleCategory->find(
            'list',
            array(
                'order' => array('VehicleCategory.id')
            )));    

            /*
            if($id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));
            }
            */
            $vehiclecategorycost = $this->VehicleCategoryCost->findById($id);
                /*
                if(!vehiclecategorycost){
                    throw new NotFoundException(__('invalid VehicleCategoriesCost'));
                }
                */

            /* if($id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));
            }*/
            $vehiclecategorycost = $this->VehicleCategoryCost->findById($id);
                /* if(!$vehicle_category_cost){
                    throw new NotFoundException(__('invalid VehicleCategoriesCost'));
                }*/

                if($this->request->is(array('post', 'put'))){
                    $this->VehicleCategoryCost->id = $id;
                    if($this->VehicleCategoryCost->save($this->request->data)){
                        $this->Session->setFlash(__('Vehicle Category Cost has been saved'));
                        return $this->redirect(array('action' => 'index'));
                    }
                    $this->Session->setFlash(__('Unable to add your Vehicle Category Cost'));
                }
            if(!$this->request->data){
                $this->request->data = $vehiclecategorycost;
            }
        }
        function delete($id){
            /*
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            */
            if($this->VehicleCategoryCost->delete($id)){
                $this->Session->setFlash(
                    __('The vehicle category cost with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
        function afterFilter(){
            if($this->action!= 'vehiclecategorycost'){
                $this->authenticate;
            }
        }
    }
?>