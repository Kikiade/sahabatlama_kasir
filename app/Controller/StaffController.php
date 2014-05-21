<?php
    class StaffController extends AppController{
        var $name = 'Staffs';
        var $helpers = array('Html', 'Form', 'Session');
        var $components = array('Session');

        function beforeFilter(){
            parent::beforeFilter();
            $this->Auth->allow('add', 'logout','index','edit','delete','view');
        }

        function index(){
            $this->set('staffs', $this->Staff->find('all'));
        }
        function view($id = null){
            $this->Staff->id = $id;
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $staff = $this->Staff->findById($id);
            if(!$staff){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $this->set('staff', $staff);
        }
        function add(){
            //post get put
            if($this->request->is('post')){
                $this->Staff->Create();
                if($this->Staff->save($this->request->data)){
                    $this->Session->setFlash(__('Your staff has been saved'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your staff'));
            }
        }
        function edit($id = null) {
            if(!$id){
                throw new NotFoundException(__('Invalid Entry'));
            }
            $staff = $this->Staff->findById($id);
            if(!$staff){
                throw new NotFoundException(__('Invalid Entry'));
            }
            if($this->request->is(array('post', 'put'))){
                $this->Staff->id = $id;
                if($this->Staff->save($this->request->data)){
                    $this->Session->setFlash(__('Your staff has been update'));
                    return $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash(__('Unable to update your staff'));
            }
            if(!$this->request->data){
                $this->request->data = $staff;
            }
        }
        function delete($id){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->Staff->delete($id)){
                $this->Session->setFlash(
                    __('The staff with id %s has been deleted.', ($id))
                );
                return $this->redirect(array('action' => 'index'));
            }
        }
        function afterFilter(){
            if($this->action!= 'staff'){
                $this->authenticate;
            }
        }
        
    }
    
?>