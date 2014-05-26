<?php
    class VehicleCategoryCosts extnds AppController{
        var $helpers = array('Html', 'Form');
        
        function beforeFilter(){
            $this->Auth->allow('index', 'view');
        }
        function index{
            $this->set('vehiclecategorycosts', $this->VehicleCategoryCost->find('all'));
        }
        function veiw($id = null){
            if (!$id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));                                                                                           
            }
            $vehiclecategorycost = $this->VehicleCategoryCost->findById('all');
            if (!$id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost));
            }
            $this->set('vehiclecategorycost', $vehiclecategorycost);
        }    
        function add(){    
            if($this->request->is('post')){
                $this->VehicleCategoryCost->Create();
                if($this->VehicleCategoryCost->save($this->request->data)){
                    $this->Session->setFlash(__('Vehicle category cost has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your Vahicle Category Cost'));
            }
        }
        function edit(){
            if($id){
                throw new NotFoundException(__('Invalid Vehicle Category Cost'));
            }
            $vehiclecategorycost = $this->VehicleCategoryCost->findById('all');
                if(!vehiclecategorycost){
                    throw new NotFoundException(__('invalid VehicleCategoriesCost'));
                }
                if($this->request->is(array('post', 'put'))){
                    $this->VehicleCategoryCost->save($this->request->data){
                        $this->Session->setFlash(__('Vehicle Category Cost has been saved'));
                        return $this->redirect(array('action' => 'index'));
                    }
                    $this->Session->setFlash(__('Unable to add your Vehicle Category Cost'));
                }
            if(!$this->request->data){
                $this->request->data = $vehiclecategorycost;
            }
        }
    }
?>